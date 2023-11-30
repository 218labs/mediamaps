<?php

namespace App\Repository;

use App\Entity\GeographicalSystem;
use App\Helpers\Base;
use App\Repository\SettingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method GeographicalSystem|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeographicalSystem|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeographicalSystem[]    findAll()
 * @method GeographicalSystem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeographicalSystemRepository extends ServiceEntityRepository
{

    private $security;    
    private $settingRepository;    

    public function __construct(ManagerRegistry $registry, Security $security, SettingRepository $settingRepository)
    {
        $this->security = $security;
        $this->settingRepository = $settingRepository;
        parent::__construct($registry, GeographicalSystem::class);
    }
}
