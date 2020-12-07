<?php

namespace App\Repository;

use App\Entity\InscriptionSolo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InscriptionSolo|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionSolo|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionSolo[]    findAll()
 * @method InscriptionSolo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionSoloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionSolo::class);
    }

    /**
     * @return InscriptionSolo[] Returns an array of InscriptionSolo objects
     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    
    public function findOneByUserId($value)
    {
        return $this->createQueryBuilder('inscriptionSolo')
            ->andWhere('inscriptionSolo.user = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }   
}
