<?php
namespace App\Controller\Admin;

use App\Controller\Helper;
use App\Entity\Oeuvre;
use App\Form\OeuvreType;
use App\Repository\OeuvreRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class OeuvreController
 * @package App\Controller\Admin
 * @Security("is_granted('ROLE_LOUEUR')")
 */
class OeuvreController extends AbstractController
{

	use Helper;

    /**
     * Création d'une nouvelle oeuvre
     * @Route("/add", name="admin_add", methods={"GET","POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function ajoutOeuvre(Request $request)
	{
		# Création d'une nouvelle oeuvre
		$oeuvre = new Oeuvre();
		$createForm = $this->createForm(OeuvreType::class, $oeuvre);
		$createForm->handleRequest($request);

		# Vérification des données du Formulaire
		if ($createForm->isSubmitted() && $createForm->isValid()) :

            $this->addFlash('success', 'Votre oeuvre à bien été crée');
			# Insertion en BDD
			$em = $this->getDoctrine()->getManager();
			$em->persist($oeuvre);
			$em->flush();

			# Redirection sur l'Oeuvre qui vient d'être créé.
			return $this->redirectToRoute('index_oeuvre', [
				'pseudoartiste' => $this->slugify($oeuvre->getArtiste()->getPseudoArtiste()),
				'slugoeuvre'    => $this->slugify($oeuvre->getNomOeuvre()),
				'id'            => $oeuvre->getId(),
			]);

			endif;

		# Affichage du Formulaire dans la Vue
		return $this->render('admin/edit/ajouteroeuvre.html.twig', [
			'form' => $createForm->createView(),

		]);
	}

    /**
     * Modification d'une oeuvre
     * @Route("/edit/{id}", name="admin_edit", methods={"GET","POST"})
     *
     * @param Request $request
     * @param Oeuvre $oeuvre
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function edit(Request $request,
                         Oeuvre $oeuvre)
	{

        # Créer un Formulaire permettant la modification d'une Oeuvre
        $editForm = $this->createForm(OeuvreType::class, $oeuvre);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) :

            $this->addFlash('success', 'Votre oeuvre à bien été modifiée');

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            # Redirection sur l'Oeuvre qui vient d'être créé.
            return $this->redirectToRoute('index_oeuvre', [
                'pseudoartiste' => $this->slugify($oeuvre->getArtiste()->getPseudoArtiste()),
                'slugoeuvre'    => $this->slugify($oeuvre->getNomOeuvre()),
                'id'            => $oeuvre->getId(),
            ]);

        endif;

		# Affichage du Formulaire dans la Vue
		return $this->render('admin/edit/modifieroeuvre.html.twig', [
			'form' => $editForm->createView(),
            'oeuvre' =>$oeuvre

		]);
	}

    /**
     * Suppression d'une oeuvre
     * @Route("/delete", name="admin_delete", methods={"POST"})
     * @param Request $request
     * @param OeuvreRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function delete(Request $request,OeuvreRepository $repository )
    {
		if( $this->isCsrfTokenValid('deleteModal', $request->get('_token'))){
		    $oeuvre = $repository->find($request->get('oeuvre_id'));

		    if ( sizeof( $oeuvre->getCommandes() ) == 0)  {
                $em = $this->getDoctrine()->getManager();
                $em -> remove($oeuvre);
                $em -> flush();
                $this->addFlash('success','Suppression réussie');
            }else{
		        $this->addFlash('danger', 'Cette oeuvre est liée à plusieurs commande, il est impossible de la supprimer !');
            }

			# Redirection sur l'Oeuvre qui vient d'être créé.
			return $this->redirectToRoute('admin_index');
		}else{
		    throw $this->createNotFoundException();
        }

	}

}