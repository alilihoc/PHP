<?php

namespace App\Repository;

use App\Entity\SupportOeuvre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SupportOeuvre|null find($id, $lockMode = null, $lockVersion = null)
 * @method SupportOeuvre|null findOneBy(array $criteria, array $orderBy = null)
 * @method SupportOeuvre[]    findAll()
 * @method SupportOeuvre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupportOeuvreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SupportOeuvre::class);
    }

//    /**
//     * @return SupportOeuvre[] Returns an array of SupportOeuvre objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SupportOeuvre
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
