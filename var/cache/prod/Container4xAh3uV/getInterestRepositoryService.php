<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInterestRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\InterestRepository' shared autowired service.
     *
     * @return \App\Repository\InterestRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\InterestRepository'] = new \App\Repository\InterestRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}