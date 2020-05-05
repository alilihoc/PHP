<?php

namespace App\Repository;

use App\Entity\Commande;
use App\Entity\Oeuvre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Commande|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commande|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commande[]    findAll()
 * @method Commande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Commande::class);
    }

    /**
     * @return mixed
     */
    public function findWaintingC(){

        return $this->createQueryBuilder('c')
            ->andWhere('c.etat = 0')
            ->orderBy('c.dateCommande', 'ASC')
            ->getQuery()
            ->getResult();

    }

    /**
     * @return mixed
     */
    public function findProcessedC(){

        return $this->createQueryBuilder('c')
            ->andWhere('c.etat = 1')
            ->orderBy('c.dateCommande', 'DESC')
            ->getQuery()
            ->getResult();

    }

    /**
     * @return mixed
     */
    public function findlocationC() {
        return $this->createQueryBuilder('c')
            ->andWhere('c.datefinres > :now')->setParameter('now', new \DateTime())
            ->getQuery()
            ->getResult();
    }

    /**
     * @return mixed
     */
    public function findSelledC(){
        return $this->createQueryBuilder('c')
            ->andWhere('c.etat = 1')
            ->andWhere('c.type = 1')
            ->andWhere('c.refuse = 0')
            ->orderBy('c.dateCommande', 'DESC')
            ->getQuery()
            ->getResult();

    }

    /**
     * @param Oeuvre $oeuvre
     * @return mixed
     */
    public function findlocationOeuvre(Oeuvre $oeuvre) {
        return $this->createQueryBuilder('c')
            ->andWhere('c.datefinres > :now')->setParameter('now', new \DateTime())
            ->andWhere('c.oeuvre = :oeuvre')->setParameter('oeuvre', $oeuvre)
            ->andWhere('c.etat = 1')
            ->andWhere('c.type = 0')
            ->andWhere('c.refuse = 0')
            ->orderBy('c.dateCommande', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param Oeuvre $oeuvre
     * @return mixed
     */
    public function findSelledOeuvre(Oeuvre $oeuvre){
        return $this->createQueryBuilder('c')
            ->andWhere('c.etat = 1')
            ->andWhere('c.type = 1')
            ->andWhere('c.refuse = 0')
            ->andWhere('c.oeuvre = :oeuvre')->setParameter('oeuvre', $oeuvre)
            ->orderBy('c.dateCommande', 'DESC')
            ->getQuery()
            ->getResult();

    }

	/**
	 * @param $client
	 *
	 * @return mixed
	 */
	public function findClientWaitingRes($client){

		return $this->createQueryBuilder('c')
		            ->andWhere('c.etat = 0')
		            ->andWhere('c.client = :client')->setParameter('client', $client)
		            ->orderBy('c.dateCommande', 'DESC')
		            ->getQuery()
		            ->getResult();

	}

	/**
	 * @param $client
	 *
	 * @return mixed
	 */
	public function findClientValidateRes($client){

		return $this->createQueryBuilder('c')
		            ->andWhere('c.etat = 1')
		            ->andWhere('c.refuse = 0')
		            ->andWhere('c.client = :client')->setParameter('client', $client)
		            ->orderBy('c.dateCommande', 'DESC')
		            ->getQuery()
		            ->getResult();

	}

	public function findLinkedOrders(Oeuvre $oeuvre){
        return $this->createQueryBuilder('c')
            ->andWhere('c.etat = 0')
            ->andWhere('c.oeuvre = :oeuvre')->setParameter('oeuvre', $oeuvre)
            ->orderBy('c.dateCommande', 'ASC')
            ->getQuery()
            ->getResult();
    }
	/**
	 * @param $client
	 *
	 * @return mixed
	 */
	public function findClientRefusedRes($client){

		return $this->createQueryBuilder('c')
		            ->andWhere('c.etat = 1')
		            ->andWhere('c.refuse = 1')
		            ->andWhere('c.client = :client')->setParameter('client', $client)
		            ->orderBy('c.dateCommande', 'DESC')
		            ->getQuery()
		            ->getResult();

	}


}
