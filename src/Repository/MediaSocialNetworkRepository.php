<?php

namespace App\Repository;

use App\Entity\Media;
use App\Entity\MediaSocialNetwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediaSocialNetwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaSocialNetwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaSocialNetwork[]    findAll()
 * @method MediaSocialNetwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaSocialNetworkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaSocialNetwork::class);
    }

    public function storeSocialNetworks(Media $media, array $f_data)
    {
        $em = $this->getEntityManager();
        $this->createQueryBuilder('ms')
            ->where('ms.media = :media')
            ->setParameter('media', $media->getId())
            ->delete()
            ->getQuery()
            ->execute();

        for ($i = 0; $i<$f_data['social_networks_count']; $i++){
          if ( !empty($f_data['name_'.$i]) &&  !empty($f_data['link_'.$i]) && !empty($f_data['folowersCount_'.$i])  ){
            $mediaSocialNetwork = new MediaSocialNetwork();
            $mediaSocialNetwork->setName($f_data['name_'.$i]);
            $mediaSocialNetwork->setLink($f_data['link_'.$i]);
            $mediaSocialNetwork->setFolowersCount($f_data['folowersCount_'.$i]);
            $mediaSocialNetwork->setMedia($media);
            $em->persist($mediaSocialNetwork); 
          }
            
        }

        $em->flush();
        
    }

    public function getItemsForSelect($id){
        
        $qb = $this->createQueryBuilder('ms')
                   ->select('ms.name')
                   ->andWhere('ms.media = :id')
                   ->setParameter('id', $id);
        $items = $qb->getQuery()->getResult();
        $social_networks = [];
        foreach($items as $item) {
          $social_networks[] = $item['name'];
        }

        return $social_networks;

    }

    
}
