<?php

namespace App\Controller\Admin;


use App\Entity\Produit;
use App\Form\ProduitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminProduitsController extends AbstractController {

    /**
     * @Route("{_locale}/admin", name="admin.produit.index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index() {
        $produitsRepository = $this->getDoctrine()
          ->getRepository(Produit::class);
        $produits = $produitsRepository->findAll();

        return $this->render('admin/produit/index.html.twig', [
          'produits' => $produits,
          'current_menu' => 'admin',
        ]);

    }

    /**
     * @Route("/{_locale}/admin/edit/{id}", name="admin.produit.edit")
     * @param \App\Entity\Produit $produit
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(Produit $produit, Request $request) {

        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('admin.produit.index');
        }

        return $this->render('admin/produit/edit.html.twig', [
          'produit' => $produit,
          'form' => $form->createView(),
          'current_menu' => 'admin',
        ]);

    }

    /**
     * @Route("/{_locale}/admin/produit/add", name="admin.produit.add")
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function add(Request $request) {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('admin.produit.index');
        }

        return $this->render('admin/produit/add.html.twig', [
          'produit' => $produit,
          'form' => $form->createView(),
          'current_menu' => 'admin',
        ]);

    }

    /**
     * @Route("/{_locale}/admin/produit/delete/{id}", name="admin.produit.delete",
     *   methods="DELETE")
     * @param \App\Entity\Produit $produit
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete(Produit $produit, Request $request) {
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();
            $this->addFlash('success','Le produit est bien supprimé');
        }else{
            $this->addFlash('danger','Le produit ne peut pas être supprimé');
        }
        return $this->redirectToRoute('admin.produit.index');
    }


}
