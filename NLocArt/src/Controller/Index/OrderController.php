<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 22/03/2018
 * Time: 00:15
 */

namespace App\Controller\Index;


use App\Controller\Helper;
use App\Controller\Swiftmailer\CustomMailer;
use App\Entity\Commande;
use App\Repository\OeuvreRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Dompdf\Dompdf;
use Dompdf\Options;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController {

	use Helper;

    /**
     * Page panier
     * @Route("/panier", name="order_selection", methods={"GET", "POST"})
     * @param Session $session
     *
     * @param OeuvreRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
	public function panier(Session $session, OeuvreRepository $repository){

		# On ouvre une session (si besoin)
		if(!isset($session)) {$session = new Session();}

		# Récupération des paniers en session
		$spanierVente    = $session->get('vente');
		$sPanierLocation = $session->get('location');

		$commandes = $panierLocation = null;
		# Réuperation des oeuvres en bdd
		if(!empty($sPanierLocation)){
			$idsl = array_keys($sPanierLocation);
			foreach ($idsl as $id){
				$panierLocation[$id] = $repository->find($id);
			}
		}
		# Réuperation des oeuvres en bdd
		if (!empty($spanierVente)){
			$idsv = array_keys($spanierVente);
			foreach ($idsv as $id){
				$commandes[$id] = $repository->find($id);
			}
		}

		return $this->render('order/panier.html.twig', [
			'commandes' => $commandes,
			'panierLocation' => $panierLocation,
		]);

	}

    /**
     * Ajout d'une commande
     * @Route("/order/add", name="order_add", methods={"POST"})
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @param Session $session
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
	public function addVente( Session $session, Request $request)
    {
        $id = $request->get('oeuvre_id');
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('add'.$id, $request->get('_token'))){
            $loc = $request->get('loc');
            $vente =  $request->get('vente');

            if ($vente != null){
                # On ouvre une session (si besoin)
                if (!$session->has('vente')) $session->set('vente', array());
                # Vérification de la présence de l'oeuvre dans le panier
                $panierVente = $session->get('vente');
                if (!array_key_exists($id, $panierVente)) {
                    # Oeuvre présente -> retour à la selection
                    # Ajout de l'oeuvre dans le panier Session
                    $panierVente[$id] = $id;
                    $session->set('vente',$panierVente);
                    $this->addFlash('success', 'Votre oeuvre à bien été ajoutée au panier');
                }else{
                    $this->addFlash('danger', 'Cette oeuvre est déjà présente dans la séléction d\'achat');
                }
            }

            if ($loc != null){
                # On ouvre une session (si besoin)
                if ( ! $session->has( 'location' ) ) {$session->set( 'location', array() );}
                # Vérification de la présence de l'oeuvre dans le panier
                $panierLoc = $session->get( 'location' );
                if (! array_key_exists( $id, $panierLoc) ) {
                    # Ajout de l'oeuvre dans le panier Session
                    $panierLoc[ $id ] = $id;
                    $session->set( 'location', $panierLoc );
                    $this->addFlash('success', 'Votre oeuvre à bien été ajoutée au panier');
                }else{
                    $this->addFlash('danger', 'Cette oeuvre est déjà présente dans la séléction de location');
                }
            }

            return $this->redirectToRoute('order_selection');
        }else{
            $this->addFlash('danger','Prolème interne, retour à la séléction');
            return $this->redirectToRoute('order_selection');
        }

	}

	/**
	 * @Route("/deleteC/{id}", name="order_delete")
	 * @param $id
	 *
	 * @param Session $session
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function deleteVente($id, Session $session, Request $request) {

		if ($request->isMethod('POST') && $this->isCsrfTokenValid('sdel'.$id, $request->get('_token'))){
            # On ouvre une session (si besoin)
            if (!$session->has('vente') ) {$session->set( 'vente', array() );}
            # Vérification de la présence de l'oeuvre dans le panier
            $panierVente = $session->get( 'vente' );
            if ( array_key_exists( $id, $panierVente ) ) {
                # Si présence  suppression la clé
                unset($panierVente[$id]);
                $session->set('vente', $panierVente);
                return $this->redirectToRoute('order_selection');
            } else {
                # Sinon redirection a la sélection
                return $this->redirectToRoute('order_selection');
            }
        }else{
            $this->addFlash('danger','Prolème interne, retour à la séléction');
            return $this->redirectToRoute('order_selection');
        }
	}


    /**
     * @Route("/deleteL/{id}", name="order_delete_location")
     * @param $id
     * @param Session $session
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function deleteLocation($id, Session $session, Request $request) {

        if ($request->isMethod('POST') && $this->isCsrfTokenValid('sdel'.$id, $request->get('_token'))){
            # On ouvre une session (si besoin)
            if ( !$session->has( 'location' ) ) { $session->set( 'location', array() );}
            # Vérification de la présence de l'oeuvre dans le panier
            $panierLocation = $session->get( 'location' );
            if ( array_key_exists( $id, $panierLocation ) ) {
                # Si présence  suppression la clé
                unset($panierLocation[$id]);
                $session->set('location', $panierLocation);
                return $this->redirectToRoute('order_selection');
            } else {

                # Sinon redirection a la sélection
                return $this->redirectToRoute('order_selection');
            }
        }else{
            $this->addFlash('danger','Prolème interne, retour à la séléction');
            return $this->redirectToRoute('order_selection');
        }
	}


    /**
     * Page ajoout commande
     * @Route("/order", name="order_order")
     *
     * @param Session $session
     * @param Request $request
     * @param ObjectManager $em
     * @param OeuvreRepository $oeuvreRepository
     * @param CustomMailer $mailer
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function order(Session $session, Request $request, ObjectManager $em, OeuvreRepository $oeuvreRepository, CustomMailer $mailer)
    {
		# Traitement de la commande
		if (isset ($_POST['order']) && $this->isCsrfTokenValid('order', $request->get('_token'))) {

		    $user = $this->getUser();
			# On ouvre une session (si besoin)
            if(!isset($session)) {$session = new Session();}
            $sPanierVente    = $session->get('vente');
            $sPanierLocation = $session->get('location');

			# Ajout des commandes en location
			if (!empty($sPanierLocation)){
				$idsl = array_keys($sPanierLocation);
				foreach ($idsl as $id){

					$commande = new Commande();
					$commande->setClient($user);
					$oeuvre = $oeuvreRepository->find($id);
					$commande->setOeuvre($oeuvre);
					$commande->setType(0);
					$commande->setEtat(0);
					$em -> persist($commande);
				}
			}
			# Ajout des commandes en vente
			if (!empty($sPanierVente)){
				$idsv = array_keys($sPanierVente);
				foreach ($idsv as $id){

					$commande = new Commande();
					$commande->setClient($user);
					$oeuvre = $oeuvreRepository->find($id);
					$commande->setOeuvre($oeuvre);
					$commande->setType(1);
					$commande->setEtat(0);
					$em -> persist($commande);
				}
			}
            $em-> flush();
			$nom = $user->getNom();
			$prenom = $user->getPrenom();
			#envoi du mail au loueur
            $mailer->sendNotification("NLOCArt: Demandes de Réservations de $nom $prenom", 'ecloz', 'ecloz', 'ecloz', 'demandeCommandeToLoueur', ['client' =>$user]);

			#envoi du mail au client
            $mailer->sendNotification("NLOCArt: Confirmation de demande", 'ecloz', $user->getMail(), 'ecloz', 'demandeCommandeToClient', []);

			# Suppression du panier
			$session->remove('vente');
			$session->remove('location');
			$this->addFlash('success', 'la commande à bien été prise en compte, ,un mail de confirmation vous à été envoyé');
			return $this->redirectToRoute('index_catalogue');
		}else{
            $this->addFlash('danger','Prolème interne, retour à la séléction');
            return $this->redirectToRoute('order_selection');
        }

	}

    /**
     * @Route("/contrat/{id}", name="admin_contrat", methods={"GET"})
     * @param Commande $commande
     *
     * @return void
     */
    public function contrat(Commande $commande)
    {
        if ($this->getUser()->getRoles()[0] != 'ROLE_LOUEUR'){
            if ( $this->getUser() != $commande->getClient() ){
                throw $this->createNotFoundException();
            }
        }

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);

        $html = $this->renderView('components/contrat.html.twig', [
            'commande'  => $commande,
            'date'=>new \DateTime()
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("contrat.pdf", [
            "Attachment" => false
        ]);
    }
}