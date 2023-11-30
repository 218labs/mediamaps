<?php

namespace App\Repository;

use App\Entity\MediaGeographicalSystem;
use App\Entity\GeographicalSystem;
use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediaGeographicalSystem|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaGeographicalSystem|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaGeographicalSystem[]    findAll()
 * @method MediaGeographicalSystem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaGeographicalSystemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaGeographicalSystem::class);
    }

    public function storeGeographicalSystems(Media $media, array $geographicalSystems)
    {
        $em = $this->getEntityManager();
        $this->createQueryBuilder('mg')
            ->where('mg.media = :media')
            ->setParameter('media', $media->getId())
            ->delete()
            ->getQuery()
            ->execute();

        foreach($geographicalSystems as $geographicalSystem) {
          //if ( !empty($geographicalSystem) ){
            $geographicalSystem = $em->getRepository(GeographicalSystem::class)->find($geographicalSystem);
            $mediaGeographicalSystem = new MediaGeographicalSystem();
            $mediaGeographicalSystem->setGeographicalSystem($geographicalSystem);
            $mediaGeographicalSystem->setMedia($media);
            $em->persist($mediaGeographicalSystem);
          //}
            
        }
        $em->flush();
        
    }

     public function getItemsForSelect($id){
        
        $qb = $this->createQueryBuilder('mg')
                   //->select('mi.name')
                   ->andWhere('mg.media = :id')
                   ->setParameter('id', $id);
        $items = $qb->getQuery()->getResult();
        $geographicalSystems = [];
        foreach($items as $item) {
          $geographicalSystems[] = $item->getGeographicalSystem();
        }

        return $geographicalSystems;

    }

}
