<?php
/**
 * Created by PhpStorm.
 * User: Hocine.Alili
 * Date: 25/06/2019
 * Time: 13:19
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/{_locale}")
     * @return \Symfony\Component\HttpFoundation\Response
     */
  function index()
  {
    return $this->render('home/index.html.twig',[
      'current_menu' => 'home'
    ]);
  }


}