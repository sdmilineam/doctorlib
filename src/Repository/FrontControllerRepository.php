<?php

namespace App\Repository;

use App\Entity\FrontController;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FrontController|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrontController|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrontController[]    findAll()
 * @method FrontController[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrontControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrontController::class);
    }

    // /**
    //  * @return FrontController[] Returns an array of FrontController objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FrontController
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
