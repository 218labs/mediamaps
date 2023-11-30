<?php

namespace App\Repository;

use App\Entity\Country;
use App\Entity\Link;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;

/**
 * @method Country|null find($id, $lockMode = null, $lockVersion = null)
 * @method Country|null findOneBy(array $criteria, array $orderBy = null)
 * @method Country[]    findAll()
 * @method Country[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountryRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Country::class);
    }

    public function exists($entity)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->where('c.countryName = :countryName');
        $qb->setParameter('countryName', $entity->getCountryName());
        if ($entity->getId()) {
            $qb->andWhere('c.id != :id');
            $qb->setParameter('id', $entity->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function getCount($user)
    {
        $qb = $this->createQueryBuilder('c')->select('COUNT(c.id)')

         ->join(Link::class, 'l', 'WITH', 'l.countryId = c.id')
         ;

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function add($name)
    {
        if (!$this->findOneBy(compact('name'))) {
            $country = new Country();
            $country->setName($name);
            $em = $this->getEntityManager();
            $em->persist($country);
            $em->flush();
        }
    }
}
