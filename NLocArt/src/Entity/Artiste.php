<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArtisteRepository")
 */
class Artiste
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="string")
	 */
    private $nomArtiste;

	/**
	 * @ORM\Column(type="string")
	 */
    private $prenomArtiste;

	/**
	 * @ORM\Column(type="string")
	 */
    private $pseudoArtiste;

	/**
	 * @ORM\Column(type="string")
	 */
	private $mailArtiste;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $biogragraphie;


	/**
	 * @ORM\Column(type="string", length=320)
	 */
    private $telephoneArtiste;

	/**
	 * @ORM\Column(type="string")
	 */
    private $adresseArtiste;

	/**
	 * @ORM\Column(type="string")
	 */
    private $website;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Oeuvre", mappedBy="artiste")
	 */
    private $oeuvres;
	#______________________________ Constructor

	public function __construct() {
		$this->oeuvres = new ArrayCollection();
	}

	#______________________________ Getters and setters

    public function getId()
    {
        return $this->id;
    }

	/**
	 * @return mixed
	 */
	public function getBiogragraphie() {
		return $this->biogragraphie;
	}

	/**
	 * @param mixed $biogragraphie
	 */
	public function setBiogragraphie( $biogragraphie ) {
		$this->biogragraphie = $biogragraphie;
	}



	/**
	 * @return mixed
	 */
	public function getNomArtiste() {
		return $this->nomArtiste;
	}

	/**
	 * @param mixed $nomArtiste
	 */
	public function setNomArtiste( $nomArtiste ) {
		$this->nomArtiste = $nomArtiste;
	}

	/**
	 * @return mixed
	 */
	public function getPrenomArtiste() {
		return $this->prenomArtiste;
	}

	/**
	 * @param mixed $prenomArtiste
	 */
	public function setPrenomArtiste( $prenomArtiste ) {
		$this->prenomArtiste = $prenomArtiste;
	}

	/**
	 * @return mixed
	 */
	public function getPseudoArtiste() {
		return $this->pseudoArtiste;
	}

	/**
	 * @param mixed $pseudoArtiste
	 */
	public function setPseudoArtiste( $pseudoArtiste ) {
		$this->pseudoArtiste = $pseudoArtiste;
	}

	/**
	 * @return mixed
	 */
	public function getMailArtiste() {
		return $this->mailArtiste;
	}

	/**
	 * @param mixed $mailArtiste
	 */
	public function setMailArtiste( $mailArtiste ) {
		$this->mailArtiste = $mailArtiste;
	}

	/**
	 * @return mixed
	 */
	public function getTelephoneArtiste() {
		return $this->telephoneArtiste;
	}

	/**
	 * @param mixed $telephoneArtiste
	 */
	public function setTelephoneArtiste( $telephoneArtiste ) {
		$this->telephoneArtiste = $telephoneArtiste;
	}

	/**
	 * @return mixed
	 */
	public function getAdresseArtiste() {
		return $this->adresseArtiste;
	}

	/**
	 * @param mixed $adresseArtiste
	 */
	public function setAdresseArtiste( $adresseArtiste ) {
		$this->adresseArtiste = $adresseArtiste;
	}

	/**
	 * @return mixed
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * @param mixed $website
	 */
	public function setWebsite( $website ) {
		$this->website = $website;
	}

	/**
	 * @return mixed
	 */
	public function getOeuvres() {
		return $this->oeuvres;
	}

	/**
	 * @param mixed $oeuvres
	 */
	public function setOeuvres( $oeuvres ) {
		$this->oeuvres = $oeuvres;
	}


    public function __toString() {
        return $this->nomArtiste;
    }


}
