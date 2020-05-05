<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TechniqueOeuvreRepository")
 */
class TechniqueOeuvre
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
    private $libelleTechniqueOeuvre;

	#______________________________ Constructor

	public function __construct() {
	}

	#______________________________ Getters and setters


	public function getId()
    {
        return $this->id;
    }

	/**
	 * @return mixed
	 */
	public function getLibelleTechniqueOeuvre() {
		return $this->libelleTechniqueOeuvre;
	}

	/**
	 * @param mixed $libelleTechniqueOeuvre
	 */
	public function setLibelleTechniqueOeuvre( $libelleTechniqueOeuvre ) {
		$this->libelleTechniqueOeuvre = $libelleTechniqueOeuvre;
	}



    public function __toString() {
        return $this->libelleTechniqueOeuvre;
    }

}
