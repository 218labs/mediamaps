<?php

namespace App\Repository;
use App\Entity\Media;
use App\Entity\Interest;
use App\Entity\MediaInterest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method MediaInterest|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaInterest|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaInterest[]    findAll()
 * @method MediaInterest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaInterestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaInterest::class);
    }

    public function storeInterests(Media $media, array $interests)
    {
        $em = $this->getEntityManager();
        $this->createQueryBuilder('mi')
            ->where('mi.media = :media')
            ->setParameter('media', $media->getId())
            ->delete()
            ->getQuery()
            ->execute();

        foreach($interests as $interest) {
            $interest = $em->getRepository(Interest::class)->find($interest);
            $mediaInterest = new MediaInterest();
            $mediaInterest->setInterest($interest);
            $mediaInterest->setMedia($media);
            $em->persist($mediaInterest);
        }
        $em->flush();
        
    }

    public function getItemsForSelect($id){
        
        $qb = $this->createQueryBuilder('mi')
                   //->select('mi.name')
                   ->andWhere('mi.media = :id')
                   ->setParameter('id', $id);
        $items = $qb->getQuery()->getResult();
        $interests = [];
        foreach($items as $item) {
          $interests[] = $item->getInterest();
        }

        return $interests;

    }
}
