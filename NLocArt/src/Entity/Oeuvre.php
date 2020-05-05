<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OeuvreRepository")
 * @Vich\Uploadable()
 */
class Oeuvre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage="Vous devez écrire plus de 3 caractères",
     *      maxMessage="Vous ne devez pas dépasser plus de 50 caractères"
     * )
	 */
	private $nomOeuvre;

	/**
     * @var string|null
	 * @ORM\Column(type="string", nullable=true),
	 */
	private $filename;

    /**
     * @Assert\Image(
     *     mimeTypes={"image/jpeg", "image/png", "image/jpg"}
     * )
     * @var File|null
     * @Vich\UploadableField(mapping="oeuvre_image", fileNameProperty="filename")
     */
    private $imageFile;

	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $anneeCreationOeuvre;

	/**
	 * @ORM\Column(type="float",nullable=true)
     * @Assert\Type(
     *      type="float",
     *      message="Veuillez mettre une hauteur en cm"
     * )
	 */
	private $hauteurOeuvre;

	/**
	 * @ORM\Column(type="float",nullable=true)
     * @Assert\Type(
     *     type="float",
     *     message="Veuillez mettre une largeur en cm"
     * )
	 */
	private $largeurOeuvre;

	/**
	 * @ORM\Column(type="float",nullable=true)
     * @Assert\Type(
     *     type="float",
     *     message="Veuillez mettre une profondeur en cm"
     * )
	 */
	private $profondeurOeuvre;

	/**
	 * @ORM\Column(type="float",nullable=true)
     * @Assert\Type(
     *     type="float",
     *     message="Veuillez mettre un poids en cm"
     * )
	 */
	private $poidsOeuvre;

	/**
	 * @ORM\Column(type="float",nullable=true)
     * @Assert\NotBlank()
     * @Assert\Type(
     *     type="float",
     *     message="Veuillez mettre {{ value }} un prix de location {{ type }} correct"
     * )
	 */
	private $prixLocationOeuvre;

	/**
	 * @ORM\Column(type="float",nullable=true)
     * @Assert\NotBlank()
     * @Assert\Type(
     *     type="float",
     *     message="Veuillez mettre un prix de vente correct"
     * )
	 */
	private $prixVenteOeuvre;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $description;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $dispo;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $special;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime|null
     */
    private $updatedAt;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\CategorieOeuvre", inversedBy="oeuvres")
	 */
	private $categorie;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Artiste", inversedBy="oeuvres")
	 */
	private $artiste;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\SupportOeuvre", inversedBy="oeuvres")
	 */
	private $supportOeuvre;

	/**
	 * @ORM\ManyToMany(targetEntity="App\Entity\TechniqueOeuvre", cascade={"persist"})
	 */
	private $techniqueOeuvres;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="oeuvre")
	 */
	private $commandes;



	#______________________________ Constructor


    /**
     * Oeuvre constructor.
     */
    public function __construct() {
		$this -> techniqueOeuvres = new ArrayCollection();
		$this -> commandes = new ArrayCollection();
		$this -> dispo     = true;
		$this -> special   = false;
		$this -> description = null;
	}

	#______________________________ Getters and setters


	/**
	 * @return mixed
	 */
	public function getSpecial() {
		return $this->special;
	}

	/**
	 * @param mixed $special
	 */
	public function setSpecial( $special ) {
		$this->special = $special;
	}




    public function getId()
    {
        return $this->id;
    }

	/**
	 * @return mixed
	 */
	public function getNomOeuvre() {
		return $this->nomOeuvre;
	}

	/**
	 * @param mixed $nomOeuvre
	 */
	public function setNomOeuvre( $nomOeuvre ) {
		$this->nomOeuvre = $nomOeuvre;
	}

	/**
	 * @return \DateTime
	 */
	public function getAnneeCreationOeuvre() {
		return $this->anneeCreationOeuvre;
	}

	/**
	 * @param \DateTime $anneeCreationOeuvre
	 */
	public function setAnneeCreationOeuvre( $anneeCreationOeuvre ) {
		$this->anneeCreationOeuvre = $anneeCreationOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getHauteurOeuvre() {
		return $this->hauteurOeuvre;
	}

	/**
	 * @param mixed $hauteurOeuvre
	 */
	public function setHauteurOeuvre( $hauteurOeuvre ) {
		$this->hauteurOeuvre = $hauteurOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getLargeurOeuvre() {
		return $this->largeurOeuvre;
	}

	/**
	 * @param mixed $largeurOeuvre
	 */
	public function setLargeurOeuvre( $largeurOeuvre ) {
		$this->largeurOeuvre = $largeurOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getProfondeurOeuvre() {
		return $this->profondeurOeuvre;
	}

	/**
	 * @param mixed $profondeurOeuvre
	 */
	public function setProfondeurOeuvre( $profondeurOeuvre ) {
		$this->profondeurOeuvre = $profondeurOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getPoidsOeuvre() {
		return $this->poidsOeuvre;
	}

	/**
	 * @param mixed $poidsOeuvre
	 */
	public function setPoidsOeuvre( $poidsOeuvre ) {
		$this->poidsOeuvre = $poidsOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getPrixLocationOeuvre() {
		return $this->prixLocationOeuvre;
	}

	/**
	 * @param mixed $prixLocationOeuvre
	 */
	public function setPrixLocationOeuvre( $prixLocationOeuvre ) {
		$this->prixLocationOeuvre = $prixLocationOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getPrixVenteOeuvre() {
		return $this->prixVenteOeuvre;
	}

	/**
	 * @param mixed $prixVenteOeuvre
	 */
	public function setPrixVenteOeuvre( $prixVenteOeuvre ) {
		$this->prixVenteOeuvre = $prixVenteOeuvre;
	}

	/**
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getDispo() {
		return $this->dispo;
	}

	/**
	 * @param mixed $dispo
	 */
	public function setDispo( $dispo ) {
		$this->dispo = $dispo;
	}

	/**
	 * @return mixed
	 */
	public function getCategorie() {
		return $this->categorie;
	}

	/**
	 * @param mixed $categorie
	 */
	public function setCategorie( $categorie ) {
		$this->categorie = $categorie;
	}

	/**
	 * @return mixed
	 */
	public function getArtiste() {
		return $this->artiste;
	}

	/**
	 * @param mixed $artiste
	 */
	public function setArtiste( $artiste ) {
		$this->artiste = $artiste;
	}

	/**
	 * @return mixed
	 */
	public function getSupportOeuvre() {
		return $this->supportOeuvre;
	}

	/**
	 * @param mixed $supportOeuvre
	 */
	public function setSupportOeuvre( $supportOeuvre ) {
		$this->supportOeuvre = $supportOeuvre;
	}

    /**
     * @return mixed
     */
    public function getTechniqueOeuvres()
    {
        return $this->techniqueOeuvres;
    }

    /**
     * @param mixed $techniqueOeuvre
     * @return Oeuvre
     */
    public function setTechniqueOeuvre($techniqueOeuvre)
    {
        if (!$this->$this->techniqueOeuvres->contains($techniqueOeuvre)){
        $this->techniqueOeuvres[] = $techniqueOeuvre;
        }
        return $this;
    }

    /**
     * @param $techniqueOeuvre
     * @return $this
     */
    public function removeTechniqueOeuvre($techniqueOeuvre){
        if ($this->$this->techniqueOeuvres->contains($techniqueOeuvre)) {
            $this->techniqueOeuvres->removeElement($techniqueOeuvre);
        }
        return $this;
    }

    /**
     * @param mixed $commande
     * @return Oeuvre
     */
    public function setCommande(Commande $commande)
    {
        if (!$this->commandes->contains($commande)){
            $this->commandes[] = $commande;
        }
        return $this;
    }


    /**
     * @param mixed $commande
     * @return Oeuvre
     */
    public function removeCommande(Commande $commande)
    {
        if ($this->commandes->contains($commande)){
            $this->commandes->removeElement($commande) ;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommandes()
    {
        return $this->commandes;
    }
    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return null|string
     */
    public function getFilename(): ?string
    {
        return $this->filename;

    }

    /**
     * @param null|string $filename
     * @return Oeuvre
     */
    public function setFilename(?string $filename): Oeuvre
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * @return null|File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param null|File $imageFile
     * @return Oeuvre
     */
    public function setImageFile(?File $imageFile): Oeuvre
    {
        $this->imageFile = $imageFile;
        if ($this->filename instanceof UploadedFile){
            $this->updatedAt = new \DateTime('now');
        }
        return $this;
    }



    public function __toString() {
        return $this->nomOeuvre;
    }

}
