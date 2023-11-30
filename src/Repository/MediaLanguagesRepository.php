<?php

namespace App\Repository;

use App\Entity\MediaLanguages;
use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediaLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaLanguages[]    findAll()
 * @method MediaLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaLanguages::class);
    }

    public function storeLanguages(Media $media, array $languages)
    {
        $em = $this->getEntityManager();
        $this->createQueryBuilder('ml')
            ->where('ml.media = :media')
            ->setParameter('media', $media->getId())
            ->delete()
            ->getQuery()
            ->execute();

        foreach($languages as $language) {
            $mediaLanguage = new MediaLanguages();
            $mediaLanguage->setName($language);
            $mediaLanguage->setMedia($media);
            $em->persist($mediaLanguage);
        }
        $em->flush();
        
    }

    public function getItemsForSelect($id){
        
        $qb = $this->createQueryBuilder('ml')
                   ->select('ml.name')
                   ->andWhere('ml.media = :id')
                   ->setParameter('id', $id);
        $items = $qb->getQuery()->getResult();
        $languages = [];
        foreach($items as $item) {
          $languages[] = $item['name'];
        }

        return $languages;

    }
}
