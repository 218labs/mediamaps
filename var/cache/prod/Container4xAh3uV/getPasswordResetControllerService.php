<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordResetControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Front\PasswordResetController' shared autowired service.
     *
     * @return \App\Controller\Front\PasswordResetController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Front\\PasswordResetController'] = $instance = new \App\Controller\Front\PasswordResetController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Front\\PasswordResetController', $container));

        return $instance;
    }
}
