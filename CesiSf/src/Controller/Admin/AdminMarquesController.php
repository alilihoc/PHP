<?php

namespace App\Controller\Admin;
use App\Entity\Marque;
use App\Entity\Produit;
use App\Form\MarqueType;
use App\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminMarquesController extends AbstractController
{
    /**
     * @Route("/{_locale}/admin/marques", name="admin.marques.index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {

        $produitsRepository = $this->getDoctrine()->getRepository(Marque::class);
        $marques = $produitsRepository->findAll();

        return $this->render('admin/marques/index.html.twig',[
            'marques' => $marques
            ,'current_menu' => 'admin'
        ]);

    }

    /**
     * @Route("/{_locale}/admin/marque/add", name="admin.marque.add")
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function add(Request $request){
        $marque = new Marque();
        $form = $this->createForm(MarqueType::class,$marque);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($marque);
            $em->flush();
            $this->addFlash('success','La marque est bien ajoutée');
            return $this->redirectToRoute('admin.marques.index');
        }

        return $this->render('admin/marques/add.html.twig',[
          'marque' =>$marque,
          'form' => $form->createView(),
          'current_menu' => 'admin'
        ]);
    }
}
