<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkCaptureRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LinkCaptureRepository' shared autowired service.
     *
     * @return \App\Repository\LinkCaptureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LinkCaptureRepository'] = new \App\Repository\LinkCaptureRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
