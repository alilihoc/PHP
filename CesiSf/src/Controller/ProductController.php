<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

  /**
   * @Route("/{_locale}/produits", name="produits.index")
   */
  function index()
  {
    $produitsRepository = $this->getDoctrine()->getRepository(Produit::class);

    $produits = $produitsRepository->findLastest();

    return $this->render('produit/index.html.twig',[
      'current_menu' => 'produits'
      ,'produits' => $produits
    ]);

  }

  /**
   * @Route("/{_locale}/produits/details/{slug}", name="produit.detail", requirements={"slug" : "[a-z0-9\-]*"})
   * @param $slug
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function detail($slug)
  {

    $produitsRepository = $this->getDoctrine()->getRepository(Produit::class);

    $produit = $produitsRepository->findOneBy(array('slug'=>$slug));

    return $this->render('produit/details.html.twig',[
      'current_menu' => 'produits'
      ,'produit' => $produit
    ]);
  }




}
