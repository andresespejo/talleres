<?php

namespace App\Repository;

use App\Entity\TallerPhp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TallerPhp|null find($id, $lockMode = null, $lockVersion = null)
 * @method TallerPhp|null findOneBy(array $criteria, array $orderBy = null)
 * @method TallerPhp[]    findAll()
 * @method TallerPhp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TallerPhpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TallerPhp::class);
    }

    // /**
    //  * @return TallerPhp[] Returns an array of TallerPhp objects
    //  */
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
    public function findOneBySomeField($value): ?TallerPhp
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
