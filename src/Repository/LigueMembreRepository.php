<?php

namespace App\Repository;

use App\Entity\LigueMembre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LigueMembre|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigueMembre|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigueMembre[]    findAll()
 * @method LigueMembre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigueMembreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigueMembre::class);
    }

    // /**
    //  * @return LigueMembre[] Returns an array of LigueMembre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LigueMembre
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
