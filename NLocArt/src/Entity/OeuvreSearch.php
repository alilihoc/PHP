<?php
/**
 * Created by PhpStorm.
 * User: hocine
 * Date: 14/11/18
 * Time: 14:20
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class OeuvreSearch
{
    CONST triChoices = [
        0 => 'Nom (ordre croissant)',
        1 => 'Nom (ordre décroissant)',
        2 => 'Plus récentes au plus anciennes',
        3 => 'Plus anciennes au plus récentes'
    ];

    private $nomOeuvre;
    private $anneeCreation;
    private $prixLocationMax;
    private $prixVenteMax;
    private $supportOeuvres;
    private $techniqueOeuvres;
    private $categorie;
    private $tri;

    public function __construct()
    {
        $this->techniqueOeuvres = new ArrayCollection();
        $this->supportOeuvres = new ArrayCollection();
        $this->categorie = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getNomOeuvre()
    {
        return $this->nomOeuvre;
    }
    /**
     * @return mixed
     */
    public function getAnneeCreation()
    {
        return $this->anneeCreation;
    }

    /**
     * @return mixed
     */
    public function getPrixLocationMax()
    {
        return $this->prixLocationMax;
    }

    /**
     * @return mixed
     */
    public function getPrixVenteMax()
    {
        return $this->prixVenteMax;
    }

    /**
     * @return ArrayCollection
     */
    public function getSupportOeuvre()
    {
        return $this->supportOeuvres;
    }

    /**
     * @return ArrayCollection
     */
    public function getTechniqueOeuvres()
    {
        return $this->techniqueOeuvres;
    }

    /**
     * @param mixed $nomOeuvre
     * @return OeuvreSearch
     */
    public function setNomOeuvre($nomOeuvre)
    {
        $this->nomOeuvre = $nomOeuvre;
        return $this;
    }

    /**
     * @param mixed $anneeCreation
     * @return OeuvreSearch
     */
    public function setAnneeCreation($anneeCreation)
    {
        $this->anneeCreation = $anneeCreation;
        return $this;
    }

    /**
     * @param mixed $prixLocationMax
     * @return OeuvreSearch
     */
    public function setPrixLocationMax($prixLocationMax)
    {
        $this->prixLocationMax = $prixLocationMax;
        return $this;
    }

    /**
     * @param mixed $prixVenteMax
     * @return OeuvreSearch
     */
    public function setPrixVenteMax($prixVenteMax)
    {
        $this->prixVenteMax = $prixVenteMax;
        return $this;
    }

    /**
     * @param mixed $supportOeuvres
     * @return OeuvreSearch
     */
    public function setSupportOeuvre($supportOeuvres)
    {
        $this->supportOeuvres = $supportOeuvres;
        return $this;
    }

    /**
     * @param mixed $techniqueOeuvres
     * @return OeuvreSearch
     */
    public function setTechniqueOeuvres($techniqueOeuvres)
    {
        $this->techniqueOeuvres = $techniqueOeuvres;
        return $this;
    }

    /**
     * @param mixed $categories
     * @return OeuvreSearch
     */
    public function setCategorie($categories)
    {
        $this->categorie = $categories;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @return mixed
     */
    public function getTri()
    {
        return $this->tri;
    }

    /**
     * @param $tri
     * @return OeuvreSearch
     */
    public function setTri($tri): OeuvreSearch
    {
        $this->tri = $tri;
        return $this;
    }


}