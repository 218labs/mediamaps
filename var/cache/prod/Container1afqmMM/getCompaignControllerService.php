<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompaignControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\CompaignController' shared autowired service.
     *
     * @return \App\Controller\Admin\CompaignController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\CompaignController'] = $instance = new \App\Controller\Admin\CompaignController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Admin\\CompaignController', $container));

        return $instance;
    }
}
