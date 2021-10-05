<?php

namespace App\Repository;

use App\Entity\Degrees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Degrees|null find($id, $lockMode = null, $lockVersion = null)
 * @method Degrees|null findOneBy(array $criteria, array $orderBy = null)
 * @method Degrees[]    findAll()
 * @method Degrees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DegreesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Degrees::class);
    }

    // /**
    //  * @return Degrees[] Returns an array of Degrees objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Degrees
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
