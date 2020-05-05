<?php

namespace App\Repository;

use App\Entity\CategorieClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CategorieClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieClient[]    findAll()
 * @method CategorieClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieClientRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategorieClient::class);
    }

//    /**
//     * @return CategorieClient[] Returns an array of CategorieClient objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategorieClient
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
