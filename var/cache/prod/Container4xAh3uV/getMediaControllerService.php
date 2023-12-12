<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\MediaController' shared autowired service.
     *
     * @return \App\Controller\Admin\MediaController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\MediaController'] = $instance = new \App\Controller\Admin\MediaController(($container->privates['App\\Repository\\MediaInterestRepository'] ?? $container->load('getMediaInterestRepositoryService')), ($container->privates['App\\Repository\\MediaLanguagesRepository'] ?? $container->load('getMediaLanguagesRepositoryService')), ($container->privates['App\\Repository\\MediaGeographicalSystemRepository'] ?? $container->load('getMediaGeographicalSystemRepositoryService')), ($container->privates['App\\Repository\\MediaSocialNetworkRepository'] ?? $container->load('getMediaSocialNetworkRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Admin\\MediaController', $container));

        return $instance;
    }
}