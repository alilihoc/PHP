<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
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
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $prixHT;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min="3", max="100",minMessage="Mettez un stock minimum de {{ limit }} pièces",maxMessage="Maximum {{ limit }} pièces en stock")
     */
    private $stockQte;

    /**
     * @ORM\Column(type="float")
     */
    private $prixTTC;

    /**
     * @ORM\Column(type="float")
     */
    private $poids;

    /**
     * @ORM\Column(type="integer")
     */
    private $couleur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fabCity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fabAdress;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $demo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fabPostCode;

    /**
     * @var string
     * @Gedmo\Slug(fields={"titre", "dateCreated"}, updatable=false, dateFormat="d/m/Y")
     * @ORM\Column(type="string", length=128, unique=true, nullable=true)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Marque", inversedBy="produits")
     */
    private $marque;

    const COULEUR = [
      1 => 'Blanc',
      2 => 'Noir',
      3 => 'Rose',
      4 => 'Rouge',
      5 => 'Bleu',
      6 => 'Vert',
      7 => 'Marron',
      8 => 'Jaune',
      9 => 'Violet',
    ];

    /**
     * Produit constructor.
     *
     * @throws \Exception
     */
    public function __construct()
    {
      $this->dateCreated = new \DateTime();
      $this->demo= false;

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCouleurType(): string
    {
      return self::COULEUR[$this->couleur];
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixHT(): ?float
    {
        return $this->prixHT;
    }

    public function setPrixHT(float $prixHT): self
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    public function getStockQte(): ?int
    {
        return $this->stockQte;
    }

    public function setStockQte(int $stockQte): self
    {
        $this->stockQte = $stockQte;

        return $this;
    }

    public function getPrixTTC(): ?float
    {
        return $this->prixTTC;
    }

    public function setPrixTTC(float $prixTTC): self
    {
        $this->prixTTC = $prixTTC;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getCouleur(): ?int
    {
        return $this->couleur;
    }

    public function setCouleur(int $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getFabCity(): ?string
    {
        return $this->fabCity;
    }

    public function setFabCity(string $fabCity): self
    {
        $this->fabCity = $fabCity;

        return $this;
    }

    public function getFabAdress(): ?string
    {
        return $this->fabAdress;
    }

    public function setFabAdress(string $fabAdress): self
    {
        $this->fabAdress = $fabAdress;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDemo(): ?bool
    {
        return $this->demo;
    }

    public function setDemo(bool $demo): self
    {
        $this->demo = $demo;

        return $this;
    }

    public function getFabPostCode(): ?string
    {
        return $this->fabPostCode;
    }

    public function setFabPostCode(string $fabPostCode): self
    {
        $this->fabPostCode = $fabPostCode;

        return $this;
    }

  /**
   * @param string $slug
   *
   * @return Produit
   */
  public function setSlug(string $slug): Produit {
    $this->slug = $slug;
    return $this;
}

  /**
   * @return string
   */
  public function getSlug(): string {
    return $this->slug;
  }

  public function getMarque(): ?Marque
  {
      return $this->marque;
  }

  public function setMarque(?Marque $marque): self
  {
      $this->marque = $marque;

      return $this;
  }
}
