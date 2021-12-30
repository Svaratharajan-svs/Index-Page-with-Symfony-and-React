<?php

namespace App\Repository;

use App\Entity\Salesrep;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Salesrep|null find($id, $lockMode = null, $lockVersion = null)
 * @method Salesrep|null findOneBy(array $criteria, array $orderBy = null)
 * @method Salesrep[]    findAll()
 * @method Salesrep[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalesrepRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Salesrep::class);
    }

    // /**
    //  * @return Salesrep[] Returns an array of Salesrep objects
    //  */
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
    public function findOneBySomeField($value): ?Salesrep
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
