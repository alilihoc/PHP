<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 23/03/2018
 * Time: 00:22
 */

namespace App\Controller\Admin;


use App\Controller\Helper;
use App\Controller\Swiftmailer\CustomMailer;
use App\Entity\Client;
use App\Entity\Commande;
use App\Repository\ClientRepository;
use App\Repository\CommandeRepository;
use App\Repository\OeuvreRepository;
use function Couchbase\defaultDecoder;
use Doctrine\Common\Persistence\ObjectManager;
use Dompdf\Dompdf;
use Dompdf\Options;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Security("is_granted('ROLE_LOUEUR')")
 */
class AdminController  extends AbstractController
{

	use Helper;

    /**
     * @var OeuvreRepository
     */
    private $oeuvreRepository;
    /**
     * @var CommandeRepository
     */
    private $commandeRepository;
    /**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var ObjectManager
     */
    private $manager;

    /**
     * AdminController constructor.
     * @param OeuvreRepository $oeuvreRepository
     * @param CommandeRepository $commandeRepository
     * @param ClientRepository $clientRepository
     * @param ObjectManager $manager
     */
    public function __construct(OeuvreRepository $oeuvreRepository,
                                CommandeRepository $commandeRepository,
                                ClientRepository $clientRepository,
                                ObjectManager $manager)
    {
        $this->oeuvreRepository = $oeuvreRepository;
        $this->commandeRepository = $commandeRepository;
        $this->clientRepository = $clientRepository;
        $this->manager = $manager;
    }

    /**
	 * @Route("/admin", name="admin_index", methods={"GET"})
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
     public function admin() {


     	$nbrClients            = count($this->clientRepository->findAll());
     	$nbrWaitingCommandes   = count($this->commandeRepository->findWaintingC());
     	$nbrProcessedCommandes = count($this->commandeRepository->findProcessedC());
     	$nbrDispoOeuvres       = count($this->oeuvreRepository->findDispoOeuvres());
     	$nbrNonDispoOeuvres    = count($this->oeuvreRepository->findUnDispoOeuvres());
     	$nbrLocOeuvres         = count($this->commandeRepository->findlocationC());
     	$nbrOeuvresVendus      = count($this->commandeRepository->findSelledC());

     	return $this->render('admin/index.html.twig',[
     		'nbrClients'        =>$nbrClients,
	        'nbrWaitingCommandes'=>$nbrWaitingCommandes,
	        'nbrDispoOeuvres'   =>$nbrDispoOeuvres,
	        'nbrNonDispoOeuvres' =>$nbrNonDispoOeuvres,
            'nbrProcessedCommandes' => $nbrProcessedCommandes,
            'nbrLocOeuvres' =>$nbrLocOeuvres,
            'nbrOeuvresVendus' =>$nbrOeuvresVendus
        ]);
     }

    /**
     * @Route("/admin/reservation", name="admin_reservation", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function waintingOrders(){

        $waitingCommandes  = $this->commandeRepository->findWaintingC();
        return $this->render('admin/waitingres.html.twig',[
            'commandes'=>$waitingCommandes,
        ]);
    }

    /**
     * nbrOeuvresVendusnbrOeuvresVendus
     * @Route("/admin/archives", name="admin_archives", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function processedOrders(){

        $processedCommandes  = $this->commandeRepository->findProcessedC();
        return $this->render('admin/processedres.html.twig',[
            'commandes'=>$processedCommandes,
            'processed' => 1
        ]);
    }

    /**
     * @Route("/admin/vendus", name="admin_vendus", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function selledOrders(){

        $selledOrders  = $this->commandeRepository->findSelledC();
        return $this->render('admin/selledOrders.html.twig',[
            'commandes'=>$selledOrders,
        ]);
    }


    /**
     * @Route("/admin/locations", name="admin_locations", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function locationOrders(){

        $currentLoc  = $this->commandeRepository->findlocationC();
        return $this->render('admin/currentLoc.html.twig',[
            'commandes'=>$currentLoc,
        ]);
    }

    /**
	 * @Route("/admin/indisponible", name="admin_indispo", methods={"GET"})
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function unDispoOrders(){

		$nonDispoOeuvres       = $this->oeuvreRepository->findUnDispoOeuvres();
		$nbrNonDispoOeuvres    = count($nonDispoOeuvres);

		return $this->render('admin/oeuvresnondispo.html.twig',[
			'oeuvres'=> $nonDispoOeuvres,
			'nbrNonDispoOeuvres'=>$nbrNonDispoOeuvres,
		]);
	}

	/**
	 * @Route("/admin/disponibles", name="admin_dispo", methods={"GET"})
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function dispoOeuvres(){

		$dispoOeuvres  = $this->oeuvreRepository->findDispoOeuvres();
		$nbrDispoOeuvres    = count($dispoOeuvres);

		return $this->render('admin/oeuvresdispo.html.twig',[
			'oeuvres'=>$dispoOeuvres,
			'nbrDispoOeuvres'=>$nbrDispoOeuvres,
		]);
	}

    /**
     * @Route("/admin/clients/", name="admin_clients", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function clients(){

        $clients  = $this->clientRepository->findAll();
        $nbrClients    = count($clients);

        return $this->render('admin/clients.html.twig',[
            'clients'=>$clients,
            'nbrClients'=>$nbrClients,
        ]);
    }

    /**
     * @Route("/admin/client/{id}", name="admin_client", methods={"GET"})
     * @param Client $client
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function client(Client $client){

        $commandes = $client->getCommandes();
        $clientWaitingRes = $clientProcessedRes = $locOeuvres = $selledOeuvres = [];
        /** @var Commande $commande */
        foreach ($commandes as $commande){
            $commande->getEtat() == 0 ? array_push($clientWaitingRes, $commande) : array_push($clientProcessedRes, $commande);
            # Oeuvres en location
            if ($commande->getLocation() == 1 && $commande->getEtat() == 1 && $commande->getType() == 0){
                $endResDate = $commande->getDatefinres();
                $now = new \DateTime();
                if ($endResDate > $now) array_push($locOeuvres, $commande);
            }
            if ($commande->getEtat() == 1 && $commande->getType() == 1 and $commande->getRefuse() == 0 ) array_push($selledOeuvres, $commande);
        }

        return $this->render('admin/client.html.twig',[
            'client'=>$client,
            'clientWaitingRes' => $clientWaitingRes,
            'clientProcessedRes' => $clientProcessedRes,
            'clientLocOeuvres' => $locOeuvres,
            'clientSelledOeuvres' => $selledOeuvres
        ]);
    }

	/**
	 * @Route("/commande/{id}", name="admin_commande", methods={"GET"})
	 * @param Commande $commande
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function commande(Commande $commande)
    {
        $lastLocOeuvre = $lastSelledOeuvre = $admin = false;
        $oeuvre = $commande->getOeuvre();
	    $linkedOrders = $this->commandeRepository->findLinkedOrders($oeuvre);
	    $selledOeuvres = $this->commandeRepository->findSelledOeuvre($oeuvre);
	    if (!empty($selledOeuvres)) $lastSelledOeuvre = $selledOeuvres[0];
	    $locOeuvres = $this->commandeRepository->findlocationOeuvre($oeuvre);
	    if (!empty($locOeuvres)) $lastLocOeuvre = $locOeuvres[0];

	    $user = $this->getUser();
	    if ($user->getRoles()[0] = 'ROLE_LOUEUR') $admin = true;
		return $this->render('admin/commande.html.twig',[
			'commande'=>$commande,
            'commandes' => $linkedOrders,
            'admin' => $admin,
            'lastLocOeuvre' => $lastLocOeuvre,
            'lastSelledOeuvre' => $lastSelledOeuvre

		]);
	}

    /**
     * @Route("/commande/validate/{id}", name="admin_validate", methods={"POST"})
     * @param Commande $commande
     * @param CustomMailer $mailer
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function validate(Commande $commande, CustomMailer $mailer, Request $request)
    {

        if ($request->isMethod('POST') && $this->isCsrfTokenValid('accept'.$commande->getId(), $request->get('_token'))){

            if ($request->get('accept') == 'Accepter'){
                $commande->setEtat(1);
                # Notre oeuvre devient indispo
                $oeuvre = $commande->getOeuvre();
                $oeuvre->setDispo(false);
                $type = $commande->getType();

                if($type == false) :
                    # Si location
                    $commande->setLocation(1);
                    $inputResDate = $request->get('debutres');
                    $formattedDebutRes = new \DateTime($inputResDate);
                    $formattedEndDate= new \DateTime($inputResDate);
                    $formattedEndDate= $formattedEndDate->modify('+6 month');
                    $commande->setDatedebutres($formattedDebutRes);
                    $commande->setDatefinres($formattedEndDate);
                endif;

                #envoi du mail au client
                $mailer->sendNotification("NLOCArt: Demande acceptée pour ".$commande->getOeuvre()->getNomOeuvre(),
                    "ecloz",
                    $commande->getClient()->getMail(),
                    "ecloz",
                    "admin/validationCommandeLoc",
                    ['commande' => $commande]);
                # Enregristrement en Base de donnée
                $em = $this->manager;
                $em ->persist($oeuvre);
                $em->persist($commande);
                $em->flush();

                return $this->render('admin/alert/successCommande.html.twig',[
                    'commande'=>$commande,

                ]);
            }

            if ($request->get('decline') ==  'Refuser'){
                $commande->setEtat(1);
                $commande->setRefuse(1);
                #envoi du mail au client
                $mailer->sendNotification("NLOCArt: Demande refusée pour ".$commande->getOeuvre()->getNomOeuvre(),
                    "ecloz",
                    $commande->getClient()->getMail(),
                    "ecloz",
                    "admin/declinerCommandeLoc",
                    ['commande' => $commande]);
                # Enregristrement en Base de donnée
                $this->addFlash('success', 'Commande Refusée ! <br> Un mail de refus à été envoyé au client.');
                $em = $this->manager;
                $em->persist($commande);
                $em->flush();
                return $this->redirectToRoute( 'admin_reservation');
            }
        }
	}



}