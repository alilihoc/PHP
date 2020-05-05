<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdresseRepository")
 */
class Adresse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse;

    /**
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    private $type;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
    private $adresse2;

	/**
     * @Assert\Regex("/^[0-9]{5}$/")
	 * @ORM\Column(type="string", nullable=true)
	 */
    private $cp;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
    private $ville;

    /**
	 * @ORM\Column(type="string", nullable=true)
	 */
    private $pays;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="adresses")
	 */
    private $client;


    public function getId()
    {
        return $this->id;
    }

	/**
	 * @return mixed
	 */
	public function getAdresse() {
		return $this->adresse;
	}

	/**
	 * @param mixed $adresse
	 */
	public function setAdresse( $adresse ) {
		$this->adresse = $adresse;
	}

	/**
	 * @return mixed
	 */
	public function getAdresse2() {
		return $this->adresse2;
	}

	/**
	 * @param mixed $adresse2
	 */
	public function setAdresse2( $adresse2 ) {
		$this->adresse2 = $adresse2;
	}

	/**
	 * @return mixed
	 */
	public function getCp() {
		return $this->cp;
	}

	/**
	 * @param mixed $cp
	 */
	public function setCp( $cp ) {
		$this->cp = $cp;
	}

	/**
	 * @return mixed
	 */
	public function getVille() {
		return $this->ville;
	}

	/**
	 * @param mixed $ville
	 */
	public function setVille( $ville ) {
		$this->ville = $ville;
	}

	/**
	 * @return mixed
	 */
	public function getPays() {
		return $this->pays;
	}

	/**
	 * @param mixed $pays
	 */
	public function setPays( $pays ) {
		$this->pays = $pays;
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
     * @param mixed $type
     * @return Adresse
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }



    public function __toString() {
        return $this->adresse;
    }

}
