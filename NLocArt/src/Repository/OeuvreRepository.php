<?php

namespace App\Repository;

use App\Entity\Oeuvre;
use App\Entity\OeuvreSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use phpDocumentor\Reflection\DocBlock;
use function PHPSTORM_META\type;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Oeuvre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Oeuvre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Oeuvre[]    findAll()
 * @method Oeuvre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OeuvreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Oeuvre::class);
    }

    public function knpPOeuvreQuery(OeuvreSearch $oeuvreSearch){

        $query = $this->createQueryBuilder('a')
            ->leftJoin('a.techniqueOeuvres', 't')
            ->addSelect('t')
            ->leftJoin('a.supportOeuvre', 's')
            ->addSelect('s')
            ->leftJoin('a.categorie', 'c')
            ->addSelect('c');
        ;
        if ($oeuvreSearch->getTechniqueOeuvres()->count() > 0){
            $techIds = [];
            foreach ($oeuvreSearch->getTechniqueOeuvres() as $techniqueOeuvre){
                array_push($techIds, $techniqueOeuvre->getId());
            }
            $query->AndWhere($query->expr()->in('t.id',$techIds ));
        }

        if ($oeuvreSearch->getNomOeuvre()){
            $query = $query
                ->andWhere('a.nomOeuvre LIKE :nomOeuvre')
                ->setParameter('nomOeuvre', '%'.$oeuvreSearch->getNomOeuvre().'%');
        }
        if ($oeuvreSearch->getPrixLocationMax()){
            $query = $query
                ->andWhere('a.prixLocationOeuvre  <= :prixMaxLocation')
                ->setParameter('prixMaxLocation', $oeuvreSearch->getPrixLocationMax());
        }
        if ($oeuvreSearch->getPrixVenteMax()){
            $query = $query
                ->andWhere('a.prixVenteOeuvre <= :prixVenteLocation')
                ->setParameter('prixVenteLocation', $oeuvreSearch->getPrixVenteMax());
        }
        if ($oeuvreSearch->getSupportOeuvre()->count() > 0){
            $supportsIds = [];
            foreach ($oeuvreSearch->getSupportOeuvre() as $supportOeuvre){
                array_push($supportsIds, $supportOeuvre->getId());
            }
            $query->AndWhere($query->expr()->in('s.id',$supportsIds ));
        }
        if ($oeuvreSearch->getCategorie()->count() > 0){
            $categoryIds = [];
            foreach ($oeuvreSearch->getCategorie() as $category){
                array_push($categoryIds, $category->getId());
            }
            $query->AndWhere($query->expr()->in('c.id',$categoryIds ));
        }
        switch ($oeuvreSearch->getTri()){
            case 0 :
                $query->orderBy('a.nomOeuvre', 'ASC');
                break;
            case 1 :
                $query->orderBy('a.nomOeuvre', 'DESC');
                break;
            case 2:
                $query->orderBy('a.id', 'DESC');
                break;
            case 3:
                $query->orderBy('a.id', 'ASC');
                break;
            default:
                $query->orderBy('a.id', 'DESC');
        }
        $query->orderBy('a.id', 'DESC');

        return $query->getQuery();
    }

	public function findXOeuvres($nbr = null)
	{
		if($nbr) :
			return $this->createQueryBuilder('a')
			            ->orderBy('a.id', 'DESC')
			            ->setMaxResults($nbr)
			            ->getQuery()
			            ->getResult();
		else :
			return $this->createQueryBuilder('a')
			            ->orderBy('a.id', 'DESC')
			            ->getQuery()
			            ->getResult();
		endif;
	}



	public function findSpecialOeuvres($nbr){

		$specialOeuvres = $this ->createQueryBuilder('a')
		             ->where('a.special = 1')
		             ->getQuery()
		             ->getResult();

		$nbrSpecialOeuvres = count($specialOeuvres);
		if ( $nbrSpecialOeuvres < $nbr){
		    $nbrNewestOeuvres =  $nbr - $nbrSpecialOeuvres;
		    $newestOeuvres = $this->findXOeuvres($nbrNewestOeuvres);
		    foreach ($newestOeuvres as$newestOeuvre){
		        array_push($specialOeuvres,$newestOeuvre);
            }
        }
        return $specialOeuvres;
	}

	public function findByCategorie($idcategorie){

		return $this -> createQueryBuilder('a')
		             ->where('a.categorie_id = :categorie_id')->setParameter('categorie_id', $idcategorie)
		             ->getQuery()
		             ->getResult();

	}

	public function findDispoOeuvres(){
		return $this->createQueryBuilder('a')
		            ->where('a.dispo = 1')
		            ->getQuery()
		            ->getResult();

	}

	public function findUnDispoOeuvres(){
		return $this->createQueryBuilder('a')
		            ->where('a.dispo = 0')
		            ->getQuery()
		            ->getResult();

	}

	public function paginationOeuvres($min, $max)
	{
		return $this->createQueryBuilder('a')
		            ->orderBy('a.id', 'DESC')
		            ->setFirstResult($min)
		            ->setMaxResults($max);

	}


	public function RandomOeuvres($nbrOeuvres)
	{
        $nbrOeuvresTotals = count($this->findAll());
        $rand = mt_rand(1,($nbrOeuvresTotals - $nbrOeuvres));
		return $this->createQueryBuilder('a')
					->orderBy('a.id', 'ASC')
					->setFirstResult($rand)
					->setMaxResults($nbrOeuvres)
					->getQuery()
					->getResult();
	}

	public function paginationNonDispoOeuvres($min,$max){
		return $this->createQueryBuilder('a')
		            ->where('a.dispo = 0')
		            ->setFirstResult($min)
		            ->setMaxResults($max);

	}

	public function paginationDispoOeuvres($min,$max){
		return $this->createQueryBuilder('a')
		            ->where('a.dispo = 1')
		            ->setFirstResult($min)
		            ->setMaxResults($max);

	}
}


