<?php

namespace App\Repository;

use App\Entity\Muscles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Muscles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Muscles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Muscles[]    findAll()
 * @method Muscles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MusclesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Muscles::class);
    }

    // /**
    //  * @return Muscles[] Returns an array of Muscles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Muscles
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
