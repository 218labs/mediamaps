<?php

namespace App\Repository;

use App\Entity\Interest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Interest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Interest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Interest[]    findAll()
 * @method Interest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Interest::class);
    }

    public function add($name)
    {
        if (!$this->findOneBy(compact('name'))) {
            $interest = new Interest();
            $interest->setName($name);
            $em = $this->getEntityManager();
            $em->persist($interest);
            $em->flush();
        }
    }
}
