<?php

namespace App\Entity;

use App\Controller\Helper;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Commande
{

	use Helper;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="commandes", fetch="EAGER")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Oeuvre", inversedBy="commandes", fetch="EAGER")
     */
    private $oeuvre;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $type;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateCommande;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $datedebutres;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $datefinres;


	/**
	 * @ORM\Column(type="boolean")
	 */
	private $etat;


    /**
     * @ORM\Column(type="boolean")
     */
    private $refuse;


    /**
     * @ORM\Column(type="boolean")
     */
    private $location;


	// ------------------------- Constructor
	public function __construct() {
		$this->dateCommande = new \DateTime();
		$this->type = false;
		$this->location = false;
		$this->datefinres = null;
		$this->datedebutres = null;
		$this->refuse = false;
	}

	public function getId()
    {
        return $this->id;
    }


	/**
	 * @return mixed
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @param mixed $location
	 */
	public function setLocation( $location ) {
		$this->location = $location;
	}

	/**
	 * @return mixed
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType( $type ) {
		$this->type = $type;
	}

	/**
	 * @return mixed
	 */
	public function getDatedebutres() {
		return $this->datedebutres;
	}

	/**
	 * @param mixed $datedebutres
	 */
	public function setDatedebutres( $datedebutres ) {
		$this->datedebutres = $datedebutres;
	}

	/**
	 * @return mixed
	 */
	public function getDatefinres() {
		return $this->datefinres;
	}

	/**
	 * @param mixed $datefinres
	 */
	public function setDatefinres( $datefinres ) {
		$this->datefinres = $datefinres;
	}

	/**
	 * @return mixed
	 */
	public function getEtat() {
		return $this->etat;
	}

	/**
	 * @param mixed $etat
	 */
	public function setEtat( $etat ) {
		$this->etat = $etat;
	}

	/**
	 * @return mixed
	 */
	public function getClient() {
		return $this->client;
	}

	/**
	 * @param mixed $client
	 */
	public function setClient( $client ) {
		$this->client = $client;
	}

	/**
	 * @return mixed
	 */
	public function getOeuvre() {
		return $this->oeuvre;
	}

	/**
	 * @param mixed $oeuvre
	 */
	public function setOeuvre( $oeuvre ) {
		$this->oeuvre = $oeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getRefuse() {
		return $this->refuse;
	}

	/**
	 * @param mixed $refuse
	 */
	public function setRefuse( $refuse ) {
		$this->refuse = $refuse;
	}



    public function __toString() {
        return str_pad($this->getId(), 10, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * @param mixed $dateCommande
     */
    public function setDateCommande($dateCommande): void
    {
        $this->dateCommande = $dateCommande;
    }


}
