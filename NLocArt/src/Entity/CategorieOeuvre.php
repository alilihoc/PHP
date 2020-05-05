<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieOeuvreRepository")
 */
class CategorieOeuvre
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
    private $libelleCategorieOeuvre;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Oeuvre", mappedBy="categorie")
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
	public function getLibelleCategorieOeuvre() {
		return $this->libelleCategorieOeuvre;
	}

	/**
	 * @param mixed $libelleCategorieOeuvre
	 */
	public function setLibelleCategorieOeuvre( $libelleCategorieOeuvre ) {
		$this->libelleCategorieOeuvre = $libelleCategorieOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getOeuvres() {
		return $this->oeuvres;
    }


    /**
     * @param Oeuvre $oeuvre
     * @return $this
     */
    public function AddOeuvre(Oeuvre $oeuvre) {
        if (!$this->oeuvres->contains($oeuvre)){
            $this->oeuvres[] = $oeuvre;
        }
        return $this;
    }

    /**
     * @param Oeuvre $oeuvre
     * @return $this
     */
    function removeOeuvre(Oeuvre $oeuvre) {
        if ($this->oeuvres->contains($oeuvre)){
            $this->oeuvres->removeElement($oeuvre);
        }
        return $this;
    }



    public function __toString() {
        return $this->libelleCategorieOeuvre;
    }

}
