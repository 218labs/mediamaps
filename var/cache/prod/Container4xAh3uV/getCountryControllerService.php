<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\CountryController' shared autowired service.
     *
     * @return \App\Controller\Admin\CountryController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\CountryController'] = $instance = new \App\Controller\Admin\CountryController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Admin\\CountryController', $container));

        return $instance;
    }
}
