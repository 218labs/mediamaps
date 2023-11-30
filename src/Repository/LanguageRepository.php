<?php

namespace App\Repository;

use App\Entity\Language;
use App\Entity\Link;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;

/**
 * @extends ServiceEntityRepository<Language>
 *
 * @method Language|null find($id, $lockMode = null, $lockVersion = null)
 * @method Language|null findOneBy(array $criteria, array $orderBy = null)
 * @method Language[]    findAll()
 * @method Language[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LanguageRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Language::class);
    }

    public function getCount($user)
    {
        $qb = $this->createQueryBuilder('ll')->select('COUNT(ll.id)')
         ->join(Link::class, 'l', 'WITH', 'l.language_id = ll.id')
         ;

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('l.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function store($user, string $lang)
    {
        $em = $this->getEntityManager();
        $langRepo = $em->getRepository(Language::class);
        $language = $langRepo->findOneBy(['code' => $lang]);
        if ( !$language ) {
            $language = new Language();
            $language->setName($lang);
            $language->setCode($lang);
            $em->persist($language);
            $em->flush();

        }

        return $language;
         
    }


}
