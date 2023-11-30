<?php

namespace App\Repository;

use App\Entity\Media;
use App\Entity\User;
use App\Entity\Country;
use App\Entity\Link;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Media|null find($id, $lockMode = null, $lockVersion = null)
 * @method Media|null findOneBy(array $criteria, array $orderBy = null)
 * @method Media[]    findAll()
 * @method Media[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaRepository extends ServiceEntityRepository
{

    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Media::class);
    }

    public function getCount($user)
    {
        $qb = $this->createQueryBuilder('m')
                   ->select('COUNT(m.id)')
                   ->andWhere('m.parentId IS NULL')
                   //->join(Link::class, 'l', 'WITH', 'l.mediaId = m.id')
                   ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getCountriesCount($user)
    {
        $qb = $this->createQueryBuilder('l')
            ->select('DISTINCT l.media_id')
            ->from(Link::class, 'l');
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        $ids = $qb->getQuery()->getSingleScalarResult();


        $qb = $this->createQueryBuilder('m')->select('COUNT(m.language_id)')
                                            ->where('m.id IN(:items)')
                                            ->setParameter('id', $ids);


        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getLanguagesCount($user)
    {
        $qb = $this->createQueryBuilder('m')
            ->select('COUNT(m.languageId) as count');
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            //$qb->andWhere('l.user_id = :user_id');
            //$qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getVisitorsCount($user)
    {
        $qb = $this->createQueryBuilder('m')
            ->select('SUM(m.visitorsCount) as count');
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            //$qb->andWhere('l.user_id = :user_id');
            //$qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function store(User $user, string $website, string $name)
    {
        $em = $this->getEntityManager();
        $mediaRepo = $em->getRepository(Media::class);

        if ( !empty($name) ){
          $website = 'https://'.$website. '/'. $name;
        }
         

        $media = $mediaRepo->findOneBy(['domain' => $website]);
        if ( !$media ) {
            $media = new Media();
            $media->setName($website);
            $media->setWebsite($website);
            $media->setCategory(!empty($name) ? 'Sociale media' : 'News');
            $em->persist($media);
            $em->flush();

        }

        return $media;
         
    }
     
    public function get_twitter_id_from_url($url)
    {   
      if (preg_match("/^https?:\/\/(www\.)?twitter\.com\/(#!\/)?(?<name>[^\/]+)(\/\w+)*$/", $url, $regs)) {
        return $regs['name'];
      }
      return false;   
    }
 
    public function getSimilarRank(User $user, string $website)
    {
        try {
            $guzzle = new \GuzzleHttp\Client();
            $api_id = $_ENV['SIMILAR_WEB_ID'];
            $url = "https://api.similarweb.com/v1/similar-rank/{$website}/rank?api_key={api_id}?";
            $data = json_decode($guzzle->get($url)->getBody()->getContents());
                
            if (isset($data->access_token)) {
                return $token->access_token;
            }
        } catch (\Exception $e) {}

        return false;
    }

    public function getCountries(User $user)
    {
      $qb = $this->createQueryBuilder('m')
        ->select('c.countrycode, c.countryname, COUNT(DISTINCT(m.id)) as count')
        ->join(Country::class, 'c', 'WITH', 'm.countryId = c.id')
        ->groupBy('c.id')
        ->orderBy('c.countryname', 'asc');

      //<img src='/img/flags/svg/{$fipscode}.svg' alt='{{$fipscode}}'>

      if (!$this->security->isGranted('ROLE_ADMIN')) {
        //$qb->andWhere('m.user_id = :user_id');
        //$qb->setParameter('user_id', $user->getId());
      }
      $result = $qb->getQuery()->getResult(); 
       
      //dd($result);exit;
      return $result;
    }

    public function getMedias($user, $compaign_id)
    {
        $qb = $this->createQueryBuilder('m')
            ->select('DISTINCT l.media_id')
            //->from(Link::class, 'l')
            ->andWhere('m.parentId IS NULL')
            ->join(Link::class, 'l', 'WITH', 'm.id = l.media_id');

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        if ( $compaign_id > 0 ) {
            $qb->andWhere('l.compaign_id = :compaign_id');
            $qb->setParameter('compaign_id', $compaign_id);
        }
        $subQuery = $qb->getQuery();
    

        $qb = $this->createQueryBuilder('media');                               
        $qb->andWhere($qb->expr()->in('media.id', $subQuery->getDQL()));

        echo ($qb->getQuery()->getDQL());exit;


        return $qb->getQuery()->getResult();
    }


    //https://api.similarweb.com/user-capabilities?api_key={similarweb_api_key}


}
