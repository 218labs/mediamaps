<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Front\SecurityController' shared autowired service.
     *
     * @return \App\Controller\Front\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Front\\SecurityController'] = $instance = new \App\Controller\Front\SecurityController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Front\\SecurityController', $container));

        return $instance;
    }
}