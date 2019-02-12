<?php

namespace App\Repository;

use App\Entity\Envents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Envents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Envents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Envents[]    findAll()
 * @method Envents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnventsRepository extends ServiceEntityRepository
{

    public function findAllVisibleQuery(): Query {

        return $this->findVisibleQuery()
            ->getQuery();
    }

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Envents::class);
    }

    // /**
    //  * @return Envents[] Returns an array of Envents objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Envents
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
