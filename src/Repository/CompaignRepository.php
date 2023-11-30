<?php

namespace App\Repository;

use App\Entity\Compaign;
use App\Entity\Link;
use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\CompaignRepository;
use Symfony\Component\Security\Core\Security;


/**
 * @extends ServiceEntityRepository<Compaign>
 *
 * @method Compaign|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compaign|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compaign[]    findAll()
 * @method Compaign[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompaignRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Compaign::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Compaign $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Compaign $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findById($user, $compaign_id)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->where('c.id = :compaign_id');
        $qb->setParameter('compaign_id', $compaign_id);
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('c.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function getCount($user)
    {
        $qb = $this->createQueryBuilder('c')->select('COUNT(c.id)');

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('c.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getMedias($user, $compaign_id)
    {
      $qb = $em->getRepository(Salle::class)->createQueryBuilder('s');
      $subQuery = $this->createQueryBuilder('l')
            ->select('l.media_id')
            ->from(Link::class, 'l')
            ->andWhere('l.compaign_id = :compaign_id')
            ->setParameter('compaign_id', $compaign_id);
      if (!$this->security->isGranted('ROLE_ADMIN')) {
        $qb->andWhere('l.user_id = :user_id');
        $qb->setParameter('user_id', $user->getId());
      }
 
      $qb = $this->createQueryBuilder('m')
        //->select('c.name, c.website, m.logo')
        ->from(Media::class, 'm');
        $qb->andWhere($qb->expr()->in('m.id', $subQuery->getDQL()))
        ->orderBy('m.name', 'asc');

      //<img src='/img/flags/svg/{$fipscode}.svg' alt='{{$fipscode}}'>

      $result = $qb->getQuery()->getResult(); 
       
      //dd($result);exit;
      return $result;
    }



}
