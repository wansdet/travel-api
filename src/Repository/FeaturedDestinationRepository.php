<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\FeaturedDestination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FeaturedDestination>
 *
 * @method FeaturedDestination|null find($id, $lockMode = null, $lockVersion = null)
 * @method FeaturedDestination|null findOneBy(array $criteria, array $orderBy = null)
 * @method FeaturedDestination[]    findAll()
 * @method FeaturedDestination[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FeaturedDestinationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FeaturedDestination::class);
    }

    public function remove(FeaturedDestination $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function save(FeaturedDestination $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //    /**
    //     * @return FeaturedDestination[] Returns an array of FeaturedDestination objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('f.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?FeaturedDestination
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
