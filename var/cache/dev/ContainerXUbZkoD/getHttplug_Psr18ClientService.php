<?php

namespace ContainerXUbZkoD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_Psr18ClientService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'httplug.psr18_client' shared service.
     *
     * @return \Psr\Http\Client\ClientInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClientInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'discovery'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClassDiscovery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'discovery'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Psr18ClientDiscovery.php';

        return $container->services['httplug.psr18_client'] = \Http\Discovery\Psr18ClientDiscovery::find();
    }
}
