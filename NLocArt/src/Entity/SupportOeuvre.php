<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SupportOeuvreRepository")
 */
class SupportOeuvre
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
    private $libelleSupportOeuvre;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Oeuvre", mappedBy="supportOeuvre")
	 */
    private $oeuvres;

	#______________________________ Constructor

	public function __construct() {
		$this->oeuvres = new ArrayCollection();
	}

    public function getId()
    {
        return $this->id;
    }

	/**
	 * @return mixed
	 */
	public function getLibelleSupportOeuvre() {
		return $this->libelleSupportOeuvre;
	}

	/**
	 * @param mixed $libelleSupportOeuvre
	 */
	public function setLibelleSupportOeuvre( $libelleSupportOeuvre ) {
		$this->libelleSupportOeuvre = $libelleSupportOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getOeuvres() {
		return $this->oeuvres;
	}

    /**
     * @param Oeuvre $oeuvre
     * @return supportOeuvre
     */
    public function setOeuvre(Oeuvre $oeuvre) {
        if (!$this->oeuvres->contains($oeuvre)){
            $this->oeuvres[] = $oeuvre;
        }
        return $this;
    }

    /**
     * @param Oeuvre $oeuvre
     * @return supportOeuvre
     */
    public function removeOeuvre(Oeuvre $oeuvre) {

        if ($this->oeuvres->contains($oeuvre)){
            $this->oeuvres->removeElement($oeuvre);
        }
        return $this;
    }



    public function __toString() {
        return $this->libelleSupportOeuvre;
    }


}
