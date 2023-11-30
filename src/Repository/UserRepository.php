<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, Security $security)
    {
        $this->security = $security;
        parent::__construct($registry, User::class);
    }

    public function exists($entity)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.email = :email');
        $qb->setParameter('email', $entity->getEmail());
        if ($entity->getId()) {
            $qb->andWhere('u.id != :id');
            $qb->setParameter('id', $entity->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function getCount($role_name='')
    {
        $qb =$this->createQueryBuilder('u')->select('COUNT(u.id)');
        if ( !empty($role_name) ) {
           $qb->where('u.roles LIKE :role')->setParameter('role', "%$role_name%");
        }

        return  $qb->getQuery()->getSingleScalarResult();
    }

    public function findById($user, $user_id)
    {
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            return $user;
        }
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.id = :user_id');
        $qb->setParameter('user_id', $user_id);
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('u.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findByRole($role_name)
    {
        return $this->createQueryBuilder('u')
            ->where('u.roles LIKE :role')
            ->setParameter('role', "%$role_name%")
            ->getQuery()
            ->getResult();
    }

    public function findEmailsByRole($role_name)
    {
        return $this->createQueryBuilder('u')
            ->select('u.email')
            ->where('u.roles LIKE :role')
            ->setParameter('role', "%$role_name%")
            ->getQuery()
            ->getArrayResult();
    }

}
