<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieClientRepository")
 */
class CategorieClient
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
    private $libelleCategorieClient;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Client", mappedBy="categorie")
	 */
    private $clients;

	#______________________________ Constructor

	public function __construct() {
		$this->clients = new ArrayCollection();
	}

	#______________________________ Getters and setters


    public function getId()
    {
        return $this->id;
    }

	/**
	 * @return mixed
	 */
	public function getLibelleCategorieClient() {
		return $this->libelleCategorieClient;
	}

	/**
	 * @param mixed $libelleCategorieClient
	 */
	public function setLibelleCategorieClient( $libelleCategorieClient ) {
		$this->libelleCategorieClient = $libelleCategorieClient;
	}

	/**
	 * @return mixed
	 */
	public function getClients() {
		return $this->clients;
	}

	/**
	 * @param mixed $clients
	 */
	public function setClients( $clients ) {
		$this->clients = $clients;
	}

    public function __toString() {
        return $this->libelleCategorieClient;
    }

}
