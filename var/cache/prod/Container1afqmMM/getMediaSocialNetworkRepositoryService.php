<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaSocialNetworkRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MediaSocialNetworkRepository' shared autowired service.
     *
     * @return \App\Repository\MediaSocialNetworkRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MediaSocialNetworkRepository'] = new \App\Repository\MediaSocialNetworkRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}