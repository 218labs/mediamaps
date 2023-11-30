<?php

namespace App\Repository;

use App\Entity\Link;
use App\Entity\Language;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LinkRepository;
use Symfony\Component\Security\Core\Security;

/**
 * @extends ServiceEntityRepository<Link>
 *
 * @method Link|null find($id, $lockMode = null, $lockVersion = null)
 * @method Link|null findOneBy(array $criteria, array $orderBy = null)
 * @method Link[]    findAll()
 * @method Link[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LinkRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Link::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Link $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findById($user, $link_id)
    {
        $qb = $this->createQueryBuilder('l');
        $qb->where('l.id = :link_id');
        $qb->setParameter('link_id', $link_id);
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Link $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getCount($user)
    {
        $qb = $this->createQueryBuilder('l')->select('COUNT(l.id)');

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getLinksCount($user, $compaign_id, $only_social_media = false)
    {
        $qb = $this->createQueryBuilder('l')->select('COUNT(l.id)')
                   ->andWhere('l.compaign_id = :compaign_id')
                   ->setParameter('compaign_id', $compaign_id);

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        if ( $only_social_media == true ) {
          $qb->andWhere('l.category_id = :category_id');
          $qb->setParameter('category_id', 'Social media');
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getLanguages($user, $compaign_id = 0){
        $qb = $this->createQueryBuilder('l')
                   ->select('DISTINCT l.lang')
                   //->join(Language::class, 'lg', 'WITH', 'lg.languageId = l.id')
                   ;

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        if ( $compaign_id > 0 ) {
            $qb->andWhere('l.compaign_id = :compaign_id');
            $qb->setParameter('compaign_id', $compaign_id);
        }

        return $qb->getQuery()->getResult();
    }

    public function getCountries($user, $compaign_id= 0){
        $qb = $this->createQueryBuilder('l')->select('DISTINCT c.countryname, c.countrycode, COUNT(l.id) as count')
                   ->andWhere('l.compaign_id = :compaign_id')
                   ->setParameter('compaign_id', $compaign_id);

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        if ( $compaign_id > 0 ) {
            $qb->andWhere('l.compaign_id = :compaign_id');
            $qb->setParameter('compaign_id', $compaign_id);
        }

        return $qb->getQuery()->getResult();

    }

    public function getCategories($user, $compaign_id = 0){
        $qb = $this->createQueryBuilder('l')
                   ->select('DISTINCT l.category_id')
                  ;

        if (!$this->security->isGranted('ROLE_ADMIN')) {
          $qb->andWhere('l.user_id = :user_id');
          $qb->setParameter('user_id', $user->getId());
        }

        if ( $compaign_id > 0 ) {
          $qb->andWhere('l.compaign_id = :compaign_id');
          $qb->setParameter('compaign_id', $compaign_id);
        }
        

        return $qb->getQuery()->getResult();

    }
  
}
