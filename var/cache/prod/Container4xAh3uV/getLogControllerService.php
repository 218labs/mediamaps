<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\LogController' shared autowired service.
     *
     * @return \App\Controller\Admin\LogController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\LogController'] = $instance = new \App\Controller\Admin\LogController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Admin\\LogController', $container));

        return $instance;
    }
}