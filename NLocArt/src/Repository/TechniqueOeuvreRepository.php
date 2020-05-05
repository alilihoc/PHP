<?php

namespace App\Repository;

use App\Entity\TechniqueOeuvre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TechniqueOeuvre|null find($id, $lockMode = null, $lockVersion = null)
 * @method TechniqueOeuvre|null findOneBy(array $criteria, array $orderBy = null)
 * @method TechniqueOeuvre[]    findAll()
 * @method TechniqueOeuvre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechniqueOeuvreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TechniqueOeuvre::class);
    }

//    /**
//     * @return TechniqueOeuvre[] Returns an array of TechniqueOeuvre objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TechniqueOeuvre
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
