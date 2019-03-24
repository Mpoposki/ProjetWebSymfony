<?php

namespace App\Repository;

use App\Entity\Goals;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Goals|null find($id, $lockMode = null, $lockVersion = null)
 * @method Goals|null findOneBy(array $criteria, array $orderBy = null)
 * @method Goals[]    findAll()
 * @method Goals[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoalsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Goals::class);
    }

    // /**
    //  * @return Goals[] Returns an array of Goals objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Goals
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
