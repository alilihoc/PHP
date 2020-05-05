<?php

namespace App\Controller\Index;

use App\Controller\Helper;
use App\Controller\Swiftmailer\CustomMailer;
use App\Entity\Contact;
use App\Entity\Oeuvre;
use App\Entity\OeuvreSearch;
use App\Form\ContactType;
use App\Form\OeuvreSearchType;
use App\Repository\OeuvreRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

	use Helper;
    /**
     * @var OeuvreRepository
     */
	private $oeuvreRepository;

    /**
     * @var ObjectManager
     */
	private $em;

	public function __construct(OeuvreRepository $oeuvreRepository, ObjectManager $em)
    {
        $this->oeuvreRepository = $oeuvreRepository;
        $this->em = $em;
    }

    /**
     * Accueil
     * @param Request $request
     * @param CustomMailer $mailer
     * @return Response
     */
	public function index(Request $request, CustomMailer $mailer)
    {
        # Récupération des 4 dernieres oeuvres
		$oeuvres = $this->oeuvreRepository->findSpecialOeuvres(4);

        # Traitement du formulaire de contact
        $contact = new Contact();
		$contactForm = $this->createForm(ContactType::class, $contact);
		$contactForm->handleRequest($request);

		if ($contactForm->isSubmitted() && $contactForm->isValid()) {
		    $this->addFlash('success', 'Votre message à bien été envoyé');
		    $mailer->sendNotification(
		        'NLOCArt: Message de '.$contact->getNom().' '. $contact->getPrenom(),
                $contact->getMail(),
                'ecloz',
                $contact->getMail(),
                'contact',
                ['contact' => $contact]
            );
        }

		return $this->render('index/index.html.twig',[
			'oeuvres'     => $oeuvres,
            'form' => $contactForm->createView()

		]);
	}

    /**
     * Page permettant d'afficher le catalogue des oeuvres d'un artiste
     * @Route("/catalogue", name="index_catalogue", methods={"GET", "POST"})
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
	public function catalogue(PaginatorInterface $paginator, Request $request)
    {
	    $search = new OeuvreSearch();
	    $searchForm = $this->createForm(OeuvreSearchType::class, $search);
	    $searchForm->handleRequest($request);

        $oeuvres = $paginator->paginate(
            $this->oeuvreRepository->knpPOeuvreQuery($search), /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            12  /*limit per page*/
        );

	    return $this->render('index/catalogue.html.twig',[
	    	'oeuvres'   => $oeuvres,
            'searchForm' => $searchForm->createView()
	    ]);
	}

	/**
	 * Page permettant d'afficher une oeuvre
	 * @Route("/{pseudoartiste}/{slugoeuvre}_{id}.html", name="index_oeuvre", requirements={"id"="\d+"} )
	 * @param Oeuvre $oeuvre
	 * @return Response
	 */
	public function oeuvre(Oeuvre $oeuvre)
    {
	    # Oeuvres aléatoires de la vue
		$randoms = $this->oeuvreRepository->RandomOeuvres(6);

		return $this->render('index/oeuvre.html.twig' ,[
			'oeuvre'  => $oeuvre,
			'randomOeuvres' => $randoms
		]);
	}

    /**
     * Nlocart
     * @param Request $request
     * @param CustomMailer $mailer
     * @return Response
     * @Route("/nlocart", name="index_nloc")
     */
	public function nlocart(Request $request, CustomMailer $mailer)
    {
	    $contact = new Contact();
        $contactForm = $this->createForm(ContactType::class, $contact);
        $contactForm->handleRequest($request);
        if ($contactForm->isSubmitted() && $contactForm->isValid()) {
            $this->addFlash('success', 'Votre message à bien été envoyé');
            $mailer->sendNotification(
                'NLOCArt: Message de '.$contact->getNom().' '. $contact->getPrenom(),
                $contact->getMail(),
                'ecloz',
                $contact->getMail(),
                'contact',
                ['contact' => $contact]
            );
        }

		return $this->render('static/nlocart.html.twig',[
			'form'      => $contactForm->createView()
		]);
	}
}