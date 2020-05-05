<?php
/**
 * Created by PhpStorm.
 * User: Hugo LIEGEARD
 * Date: 22/02/2018
 * Time: 12:40
 */

namespace App\Controller\Security;


use App\Controller\Helper;
use App\Controller\Swiftmailer\CustomMailer;
use App\Entity\Adresse;
use App\Entity\Client;
use App\Form\ClientType;
use App\Form\MembreType;
use App\Repository\ClientRepository;
use App\Service\Security\ClientService;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

	use Helper;

	private static $passwordPattern = "^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$^";

    /**
     * @var CustomMailer
     */
    private $mailer;

	/**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var ObjectManager
     */
    private $manager;
    /**
     * @var ClientService
     */
    private $clientService;

    /**
     * SecurityController constructor.
     * @param CustomMailer $mailer
     * @param ClientRepository $clientRepository
     * @param ObjectManager $manager
     * @param ClientService $clientService
     */
    public function __construct(CustomMailer $mailer,
                                ClientRepository $clientRepository,
                                ObjectManager $manager,
                                ClientService $clientService)
    {
        $this->mailer = $mailer;
        $this->clientRepository = $clientRepository;
        $this->manager = $manager;
        $this->clientService = $clientService;
    }


    /**
     * Connexion d'un utilisateur
     * @Route("/connexion", name="security_connexion")
     * @param AuthenticationUtils $authenticationUtils
     * @param Request $request
     * @return Response
     */
	public function connexion(AuthenticationUtils $authenticationUtils, Request $request)
	{
		# Récupération du message d'erreur s'il y en a un.
		$error = $authenticationUtils->getLastAuthenticationError();
        // username entered by the user
		$lastEmail = $authenticationUtils->getLastUsername();
        // Check isActive
        $message = $this->clientService->checkLoginErrors($lastEmail, $request, $error);

		return $this->render('security/connexion.html.twig', array(
			'last_email'    => $lastEmail,
            'message'       => $message
        ));
	}

	/**
	 * Inscription d'un utilisateur
	 * @Route("/inscription", name="security_inscription", methods={"GET", "POST"})
	 *
	 * @param Request $request
	 * @param UserPasswordEncoderInterface $passwordEncoder
	 * @return Response
	 */
	public function inscription(Request $request,UserPasswordEncoderInterface $passwordEncoder)
	{
	    # Création d'un nouveau Client
		$client = new Client();
		$client -> setRole('ROLE_MEMBRE');
		$clientForm  = $this->createForm(ClientType::class, $client);
		$clientForm->handleRequest($request);
		if ($clientForm->isSubmitted() && $clientForm->isValid()) {

		    # Gestion du mot de passe
            $password = $passwordEncoder->encodePassword($client, $client->getPlainPassword());
            $client->setMdp($password);
            $verificationToken = $this->str_random(60);
            $client->setVerificationToken($verificationToken);

            $this->manager->persist($client);
            $this->manager->flush();

            $this->mailer->sendNotification("Confirmation d'inscription",'ecloz',$client->getMail(),'ecloz','inscription',['client' => $client]);

            # Redirection sur la page connexion
            return $this->redirect('connexion?inscription=success');
		}

		# Affichage du Formulaire dans la Vue
		return $this->render('security/inscription.html.twig', [
			'form' => $clientForm->createView(),
		]);
	}

    /**
     * Page Mot-de-passe oublié
     * @Route("/forget", name="security_forget", methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
	public function forget(Request $request)
    {
		$mailError = $check = $client = null;
		$forget = $request->get('forget');
		if (isset($forget)) :
			$checkedMail = $this->checkInput($request->get('mail'));
			if (!filter_var($checkedMail,FILTER_VALIDATE_EMAIL)){
				$mailError = 'Veuillez saisir un email valide';
			}else{
				$client = $this->clientRepository->findOneBy(['mail' => $checkedMail]);
				if ($client == null) {
					$mailError = 'Aucun mail trouvé à ce champs';
				}else{
				    $resetToken = $this->str_random(60);
				    $expiredAt = new \DateTime('+30 min');
				    $client->setResetToken($resetToken)->setExpiredAt($expiredAt);
                    $this->mailer->sendNotification("NLOCArt: Mot de passe oublié",'ecloz',$client->getMail(),'ecloz','forget',['client' => $client]);
                    $this->manager -> flush();
                    $this->addFlash('success',"Votre demande à bien été prise en compte,<br/>
                    Un lien de modification de mot de passe vous a été envoyé sur votre boite mail");
                     return $this->redirectToRoute('index');
				}
			}
		endif;

		return $this->render('security/forget.html.twig', [
			'mailError' => $mailError,
		]);
	}


	/**
	 * Page Modifier mon Compte
	 * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
	 * @Route("/modifierCompte", name="modify_account", methods={"GET","POST"})
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function modifyAccount(
			Request  $request
		)
	{
	    # Génération formulaire de modification
        $user = $this->getUser();
        $em = $this->manager;
        $client = $this->clientRepository->find($user->getId());
		$clientForm  = $this->createForm(MembreType::class, $client);
		$clientForm->handleRequest($request);
		if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            /** @var Client $client */
            $clientData = $clientForm->getData();

            # Suppression anciennes adresse et ajout des nouvelles
            $oldAdressesIds = $newAdressesIds = [] ;
            // Anciennes Adresses -> Récupérations des ids
            $adresseRepo =  $this->getDoctrine()->getRepository(Adresse::class);
            $oldAdresses = $adresseRepo->findByClient($client);

            // Nouvelles Adresses -> Récupérations des ids
            $newAdresses = $clientData->getAdresses() ;

            if ( !empty($oldAdresses) ){
                forEach ($oldAdresses as $adress){
                    /** @var Adresse $adress */
                    array_push($oldAdressesIds,$adress->getId());
                }
                forEach($newAdresses as $adress){
                    $adress->setClient($client);
                    array_push($newAdressesIds, $adress->getId());
                }

                // Adresses supprimés sur le formulaire -> Suppression
                $arrayDiffs = array_diff($oldAdressesIds,$newAdressesIds);
                if(!empty($arrayDiffs)){
                    foreach ($arrayDiffs as $adresseToDeleteId){
                        $em ->remove($adresseRepo->find($adresseToDeleteId));
                    }
                }
            } else {
                forEach($newAdresses as $adress){
                    $adress->setClient($client);
                }
            }
			$em->flush();
            $this->addFlash('success',"Modification prise en compte");
		}


		return $this->render('security/modifierCompte.html.twig', [
			'form' => $clientForm->createView(),
		]);
	}


    /**
     * Page Confirmation de compte
     * @Route("/confirm/{id}/{token}", name="security_confirm", methods={"GET"})
     * @param Client $user
     * @param $token
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function confirmAccount(Client $user, $token)
    {
        $dbToken = $user->getVerificationToken();
        // Activation de compte
        if($user && $dbToken === $token ){
            $user->setIsActive(true)->setVerificationToken(null);
            $this->addFlash("success",'Votre compte a bien été validé') ;
            $this->manager->flush();
            return $this->redirectToRoute('security_connexion');
        }else {
            // Token non valide
            $this->addFlash('danger','Ce lien n\'est pas valide') ;
            return $this->redirectToRoute('index');
        }
    }


    /**
     * Page Changer mot de passe pour les utilisateurs connectés
     * @Route("/reset_password", name="security_reset_password", methods={"GET","POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @param Request $request
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @return Response
     */
    public function resetPassword(Request $request,
                                  UserPasswordEncoderInterface $userPasswordEncoder
            )
    {
        $isSuccess = true ;
        $passwordErrors = [];
        $user = $this->getUser();
        if ($request->isMethod('POST')){
            $oldpassword = $request->request->get('old_password');
            $password = $request->request->get('password');
            $passwordConfirm = $request->request->get('password-confirm');
            $client = $this->clientRepository->find($user->getId());

            # Gestion des erreurs
            if ( !$userPasswordEncoder->isPasswordValid($client, $oldpassword) ){
                $passwordErrors['oldPasswordError'] = "Votre ancien mot de passe est incorrect";
                $isSuccess = false;
            }
            if ( (empty($password)) || (!preg_match(self::$passwordPattern, $password)) ){
                $passwordErrors['passwordError'] = "Votre mot de passe n'est pas valide, doit contenir au moins une majuscule,<br>
                 une minuscule, un nombre, et contenir au moins 8 caractères";
                $isSuccess = false;
            } elseif ($userPasswordEncoder->isPasswordValid($client, $password)){
                $passwordErrors['passwordError'] = 'Le mot de passe doit être différent de l\'ancien';
            } elseif($passwordConfirm !== $password) {
                $passwordErrors['passwordConfirmError'] = 'Le champs vérification du mot de passe ne correspond pas';
                $isSuccess = false;
            }
            # Si y a pas d'erreurs, insertion en bd
            if ($isSuccess){
                $passwordC = $userPasswordEncoder->encodePassword($client, $password);
                $client->setMdp($passwordC);
                $this->manager->flush();
                $this->addFlash('success','Votre mot de passe à bien été modifié');
            }
        }

        return $this->render('security/changemdp.html.twig',[
            'passwordErrors' => $passwordErrors,
        ]);

    }


    /**
     * Page Changer de mot de passe pour les utilisateurs déconnectés
     * @Route("/reset_password/d", name="security_reset_password_d", methods={"GET","POST"})
     * @param Request $request
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @return Response | RedirectResponse
     */
    public function resetDisconnectedPassword(Request $request,
                                  UserPasswordEncoderInterface $userPasswordEncoder
            )
    {

        if ($request->isMethod('POST')){
            $isSuccess = true ;
            $passwordErrors = [];
            $password = $request->request->get('password');
            $passwordConfirm = $request->request->get('password-confirm');
            $token = $request->request->get('token');

            /** @var Client $client */
            $client = $this->clientRepository->findOneByResetToken($token);

            if ($client){
                # Gestion des erreurs
                if ( (empty($password)) || (!preg_match(self::$passwordPattern, $password)) ){
                    $passwordErrors['passwordError'] = "Votre mot de passe n'est pas valide, doit contenir au moins une majuscule,<br>
                 une minuscule, un nombre, et contenir au moins 8 caractères";
                    $isSuccess = false;
                } elseif ($userPasswordEncoder->isPasswordValid($client, $password)){
                    $isSuccess = false;
                    $passwordErrors['passwordError'] = 'Le mot de passe doit être différent de l\'ancien';
                } elseif($passwordConfirm !== $password) {
                    $passwordErrors['passwordConfirmError'] = 'Le champs vérification du mot de passe ne correspond pas';
                    $isSuccess = false;
                }
                # Si y a pas d'erreurs, insertion en bd
                if ($isSuccess){
                    $passwordC = $userPasswordEncoder->encodePassword($client, $password);
                    $client ->setResetToken(null)
                            ->setExpiredAt(null)
                            ->setMdp($passwordC);
                    $this->manager->flush();
                    $this->addFlash('notice','Votre mot de passe à bien été modifié');
                    return $this->redirectToRoute('index');
                }else{
                    return $this->render('security/changemdpD.html.twig', [
                        'token'  =>$token,
                        'passwordErrors' =>$passwordErrors
                    ]);
                }
            }else{
                $this->addFlash('success','Problème interne');
                return $this->redirectToRoute('index');

            }
        } else{
            $resetToken = $request->query->get('token');
            /** @var Client $client */
            $client = $this->clientRepository->findOneByResetToken($resetToken);
            if ($client){
                $expiredAt = $client->getExpiredAt();
                $now = new \DateTime('now');
                if ($now < $expiredAt){
                    return $this->render('security/changemdpD.html.twig',['token'=>$resetToken]);

                }else{
                    $this->addFlash('danger', "Ce lien n'est plus valide");
                    return $this->redirectToRoute('index');
                }
            }else{
                $this->addFlash('danger', "Ce lien n'est plus valide");
                return $this->redirectToRoute('index');

            }
        }
    }
}