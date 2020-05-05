<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 30/03/2018
 * Time: 00:01
 */

namespace App\Controller\Security;

use App\Entity\Client;
use App\Entity\Commande;
use App\Form\MembreType;
use App\Repository\ClientRepository;
use App\Repository\CommandeRepository;
use App\Repository\OeuvreRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\TwigBundle\Controller\ExceptionController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends AbstractController
{

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
	 * Page Mon compte
	 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
	 * @Route("/monCompte", name="security_account", methods={"GET"})
	 */
	public function account()
	{
	    $client = $this->getUser();
        $commandes = $client->getCommandes();
        $clientWaitingRes = $clientProcessedRes = $locOeuvres = $selledOeuvres = [];
        $nbrWRes = $nbrVres = $nbrRRes = $nbrLres = 0;
        /** @var Commande $commande */
        foreach ($commandes as $commande){
            if ($commande->getEtat() == 0){
                array_push($clientWaitingRes, $commande);
                $nbrWRes++;
            }else{
                array_push($clientProcessedRes, $commande);
            }
            if ($commande->getEtat() == 1 && $commande->getRefuse() == 1 ) {
                $nbrRRes++;
            }elseif($commande->getEtat() == 1 && $commande->getRefuse() == 0 ){
                $nbrVres++;
            }
            # Oeuvres en location
            if ($commande->getLocation() == 1 && $commande->getEtat() == 1 && $commande->getType() == 0){
                $endResDate = $commande->getDatefinres();
                $now = new \DateTime();
                if ($endResDate > $now){
                    array_push($locOeuvres, $commande);
                    $nbrLres ++;
                }
            }
            if ($commande->getEtat() == 1 && $commande->getType() == 1 and $commande->getRefuse() == 0 ) array_push($selledOeuvres, $commande);
        }

        return $this->render('admin/client.html.twig',[
            'client'=>$client,
            'clientWaitingRes' => $clientWaitingRes,
            'clientProcessedRes' => $clientProcessedRes,
            'clientLocOeuvres' => $locOeuvres,
            'clientSelledOeuvres' => $selledOeuvres,
            'nbrWRes'=>$nbrWRes,
            'nbrVres'=>$nbrVres,
            'nbrRRes' => $nbrRRes,
            'nbrLRes' =>$nbrLres
        ]);
	}


	/**
	 * @Security("is_granted('ROLE_MEMBRE')")
	 * @Route("/user/attente", name="user_reservation", methods={"GET","POST"})
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function waintingOrders(){

		$commandes   = $this->getUser()->getCommandes();
		$waitingCommandes = [];
		foreach ($commandes as $commande){
		    if ($commande->getEtat() == 0 ) $waitingCommandes[] = $commande;
        }

		return $this->render('user/waitingres.html.twig',[
			'commandes'=>$waitingCommandes,
		]);
	}


	/**
	 * @Security("is_granted('ROLE_MEMBRE')")
	 * @Route("/{username}/validate", name="user_validate", methods={"GET","POST"})
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function validateOrders(){

		$commandes = $this->getUser()->getCommandes();
        $validatedCommandes = [];
        $nbrDispoOeuvres = 0;
        foreach ($commandes as $commande){
            if ($commande->getEtat() == 1 && $commande->getRefuse() == 0 ) {
                $validatedCommandes[] = $commande;
                $nbrDispoOeuvres++;
            }
        }


		return $this->render( 'user/commandesValidees.html.twig',[
			'commandes' => $validatedCommandes,
            'nbrDispoOeuvres' => $nbrDispoOeuvres
		]);
	}


    /**
     * @Security("is_granted('ROLE_MEMBRE')")
     * @Route("/{username}/refused", name="user_refused", methods={"GET","POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function RefusedOrders(){

        $commandes = $this->getUser()->getCommandes();
        $refusedCommandes = [];
        $nbrNonDispoOeuvres = 0;
        foreach ($commandes as $commande){
            if ($commande->getEtat() == 1 && $commande->getRefuse() == 1 ){
                $refusedCommandes[] = $commande;
                $nbrNonDispoOeuvres++;
            }
        }

        return $this->render('user/commandesRefuses.html.twig',[
            'commandes'=> $refusedCommandes,
            'nbrNonDispoOeuvres'=>$nbrNonDispoOeuvres
        ]);
    }


    /**
     * @Security("is_granted('ROLE_MEMBRE')")
     * @Route("/{username}/location", name="user_location", methods={"GET","POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function locOrders(){

        $commandes = $this->getUser()->getCommandes();
        $locCommandes = [];
        $nbrLocOeuvres = 0;
        /** @var Commande $commande */
        foreach ($commandes as $commande){
            if ($commande->getEtat() == 1 && $commande->getRefuse() == 0 && $commande->getType() == 0){
                $now = new \DateTime();
                if ($commande->getDatefinres() > $now){
                    $locCommandes[] = $commande;
                    $nbrLocOeuvres++;
                }
            }
        }

        return $this->render('user/locOeuvres.html.twig',[
            'commandes'=> $locCommandes,
            'nbrLocOeuvres'=>$nbrLocOeuvres
        ]);
    }



    /**
     * Attention: A placer en derniere position du dernier controller
     * @Route("/{page}", name="static_page")
     * @param $page
     * @return Response | ExceptionController
     */
    public function staticPageAction($page){
        try {
            return $this->render('static/'.$page.".html.twig");
        } catch (\Exception $e) {
            throw $this->createNotFoundException('Cette page n\'existe pas !');
        }
    }

}