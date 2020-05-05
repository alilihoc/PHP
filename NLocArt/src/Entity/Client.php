<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 * @UniqueEntity(fields={"mail"}, errorPath="mail", message="Ce compte existe déjà !")
 */
class Client implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     */
    private $id;

	/**
	 * @ORM\Column(type="string")
     * @Assert\Length(
     *      min = 2,
     *     minMessage="Votre nom est trop court, au moins deux lettres"
     * )
	 */
    private $nom;

	/**
	 * @ORM\Column(type="string")
     * @Assert\Length(
     *      min = 2,
     *     minMessage="Votre prenom est trop court, au moins deux lettres"
     * )
	 */
	private $prenom;

	/**
	 * @ORM\Column(type="string",
	 * nullable=true)
     * 
	 */
	private $societe;

	/**
	 * @ORM\Column(type="string",
	 * nullable=true)
     * 
     * @Assert\Type(
     *     type="integer"
     * )
	 */
	private $siret;

	/**
	 * @ORM\Column(type="string", length=320)
     * @Assert\Email(
     *     message="Cette adresse mail n'est pas valide",
     *     checkMX= true
     * )
	 */
	private $mail;

	/**
     * @Assert\Regex(
     *     pattern="^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$^",
     *     message="Numéro de téléphone non valide"
     * )
	 * @ORM\Column(type="string",nullable=true)
	 */
	private $telephone;

	/**
     * @Assert\Regex(
     *     pattern="^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$^",
     *     message="Numéro de téléphone non valide"
     * )
	 * @ORM\Column(type="string",
	 * nullable=true)
     *
	 */
	private $mobile;

    /**
     * @Assert\Regex(
     *     pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$^",
     *     message="Votre mot de passe doit contenir au moins une majuscule, une minuscule, un nombre et contenir au moins 8 caractères"
     * )
     * @ORM\Column(type="string")
     *
     */
    private $password;

    /**
     *
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $verificationToken;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $resetToken;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    private $expiredAt;


    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default"= 0})
     *
     */
    private $activated;

    /**
	 * @ORM\ManyToOne(targetEntity="App\Entity\CategorieClient", inversedBy="clients")
	 *
	 */
	private $categorie;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Adresse", mappedBy="client", cascade={"persist"})
	 */
	private $adresses;

	/**
	 * @ORM\Column(name="roles", type="array")
	 */
	private $roles;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="client")
	 */
	private $commandes;


	#______________________________ Constructor

	public function __construct() {
		$this->adresses = new ArrayCollection();
		$this->commandes= new ArrayCollection();
		$this->roles= new ArrayCollection();
		$this->activated  = false;
		$this->expiredAt = null;
		$this->resetToken = null;
	}

	#______________________________ Getters and setters





	public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCommandes() {
        return $this->commandes;
    }

    /**
     * @param Commande $commande
     * @return Client
     */
    public function setCommande(Commande $commande ) {
        if (!$this->commandes->contains($commande)){
            $this->commandes[] = $commande;
        }
        return $this;
    }

    /**
     * @param Commande $commande
     * @return Client
     */
    public function removeCommande(Commande $commande ) {
        if ($this->commandes->contains($commande)){
            $this->commandes->removeElement($commande)  ;
        }
        return $this;
    }

    /**
     * @param $role
     * @return Client
     */
    public function setRole($role) {
        $this->roles[] = $role;
        return $this;
    }

    /**
     * @param $role
     */
    public function addRole($role) {
        $this->roles[] = $role;
    }

    /**
     * @param $role
     */
    public function removeRole($role) {
        $this->roles->removeElement($role);
    }

    /**
	 * @return mixed
	 */
	public function getRoles() {
		return $this->roles;
	}


	/**
	 * @return mixed
	 */
	public function getNom() {
		return $this->nom;
	}

	/**
	 * @param mixed $nom
	 */
	public function setNom( $nom ) {
		$this->nom = $nom;
	}

	/**
	 * @return mixed
	 */
	public function getPrenom() {
		return $this->prenom;
	}

	/**
	 * @param mixed $prenom
	 */
	public function setPrenom( $prenom ) {
		$this->prenom = $prenom;
	}

	/**
	 * @return mixed
	 */
	public function getSociete() {
		return $this->societe;
	}

	/**
	 * @param mixed $societe
	 */
	public function setSociete( $societe ) {
		$this->societe = $societe;
	}

	/**
	 * @return mixed
	 */
	public function getSiret() {
		return $this->siret;
	}

	/**
	 * @param mixed $siret
	 */
	public function setSiret( $siret ) {
		$this->siret = $siret;
	}

	/**
	 * @return mixed
	 */
	public function getMail() {
		return $this->mail;
	}

	/**
	 * @param mixed $mail
	 */
	public function setMail( $mail ) {
		$this->mail = $mail;
	}

	/**
	 * @return mixed
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * @param mixed $telephone
	 */
	public function setTelephone( $telephone ) {
		$this->telephone = $telephone;
	}

	/**
	 * @return mixed
	 */
	public function getMobile() {
		return $this->mobile;
	}

	/**
	 * @param mixed $mobile
     * @return Client
	 */
	public function setMobile( $mobile ) {
		$this->mobile = $mobile;
        return $this;
    }

	/**
	 * @return mixed
	 */
	public function getMdp() {
		return $this->password;
	}

	/**
	 * @param mixed $mdp
     * @return Client
	 */
	public function setMdp( $mdp ) {
		$this->password = $mdp;
        return $this;

    }

	/**
	 * @return mixed
	 */
	public function getCategorie() {
		return $this->categorie;
	}

	/**
	 * @param mixed $categorie
     * @return Client
	 */
	public function setCategorie( $categorie ) {
		$this->categorie = $categorie;
		return $this;

    }

	/**
	 * Returns the password used to authenticate the user.
	 *
	 * This should be the encoded password. On authentication, a plain-text
	 * password will be salted, encoded, and then compared to this value.
	 *
	 * @return string The password
	 */
	public function getPassword() {
		return $this->getMdp();
	}

	/**
	 * Returns the salt that was originally used to encode the password.
	 *
	 * This can return null if the password was not encoded using a salt.
	 *
	 * @return string|null The salt
	 */
	public function getSalt() {
		return null;
	}

	/**
	 * Returns the username used to authenticate the user.
	 *this
	 * @return string The username
	 */
	public function getUsername() {
		return $this->getMail();
	}

	/**
	 * Removes sensitive data from the user.
	 *
	 * This is important if, at any given point, sensitive information like
	 * the plain-text password is stored on this object.
	 */
	public function eraseCredentials() {
		return null;
	}

    /**
     * @param Adresse $adresse
     * @return Client
     */
    public function setAdresse(Adresse $adresse)
    {
        if (!$this->adresses->contains($adresse)){
            $this->adresses[] = $adresse;
        }
        return $this;
    }

    /**
     * @param Adresse $adresse
     * @return Client
     */
    public function removeAdresse(Adresse $adresse)
    {
        if ($this->adresses->contains($adresse)){
            $this->adresses->removeElement($adresse);
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * @return mixed
     */
    public function getVerificationToken()
    {
        return $this->verificationToken;
    }

    /**
     * @param mixed $verificationToken
     * @return Client
     */
    public function setVerificationToken($verificationToken)
    {
        $this->verificationToken = $verificationToken;
        return $this;
    }


    /**
     * @return boolean
     */
    function getIsActive() {
        return $this->activated;
    }


    /**
     * @param $isActive
     * @return $this
     */
    function setIsActive($isActive) {
        $this->activated = $isActive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResetToken()
    {
        return $this->resetToken;
    }

    /**
     * @param $resetToken
     * @return $this
     */
    public function setResetToken($resetToken)
    {
        $this->resetToken = $resetToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * @param $expiredAt
     * @return $this
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     * @return Client
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * @param mixed $activated
     * @return Client
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
        return $this;
    }

    /**
     * @param mixed $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


    /**
     * @return mixed
     */
    public function __toString() {
        return $this->nom;
    }


}
