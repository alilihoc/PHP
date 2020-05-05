<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function nativeSQL($nb):array {
      //Récupère la nom de la table correspondan à l'entité
      $table = $this->getClassMetadata()->table["name"];

      //Code SQL
      $sql = "SELECT p.* "
        ."FROM " . $table . " AS p "
        ."WHERE p.stock_qte < :val";

      $rsm = new ResultSetMappingBuilder($this->getEntityManager());
      $rsm->addEntityResult(Produit::class, "p");

      //Mppage des colonne SQL aux attributs de l'objet Entity
      foreach ($this->getClassMetadata()->fieldMappings as $obj) {
        $rsm->addFieldResult("p", $obj["columnName"], $obj["fieldName"]);
      }

      //Exécution du mappage
      $stmt = $this->getEntityManager()->createNativeQuery($sql, $rsm);

      //Paramètres de la requete
      $stmt->setParameter(":val", $nb);

      $stmt->execute();
      return $stmt->getResult();
    }

    /**
     * @return Produit
     */
    public function findLastest():array
    {
      return $this->createQueryBuilder('p')
        ->Where('p.stockQte >= :valStock')
        ->setParameter('valStock', 1)
        ->setMaxResults(8)
        ->getQuery()
        ->getResult()
        ;
    }



  // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
