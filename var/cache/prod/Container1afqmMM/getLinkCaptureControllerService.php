<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkCaptureControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\LinkCaptureController' shared autowired service.
     *
     * @return \App\Controller\Admin\LinkCaptureController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\LinkCaptureController'] = $instance = new \App\Controller\Admin\LinkCaptureController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Admin\\LinkCaptureController', $container));

        return $instance;
    }
}