<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\FileController' shared autowired service.
     *
     * @return \App\Controller\Admin\FileController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\FileController'] = $instance = new \App\Controller\Admin\FileController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Admin\\FileController', $container));

        return $instance;
    }
}
