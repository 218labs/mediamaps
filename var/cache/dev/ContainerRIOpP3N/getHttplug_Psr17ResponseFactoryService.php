<?php

namespace ContainerRIOpP3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_Psr17ResponseFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'httplug.psr17_response_factory' shared service.
     *
     * @return \Psr\Http\Message\ResponseFactoryInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ResponseFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'discovery'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClassDiscovery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'discovery'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Psr17FactoryDiscovery.php';

        return $container->services['httplug.psr17_response_factory'] = \Http\Discovery\Psr17FactoryDiscovery::findResponseFactory();
    }
}
