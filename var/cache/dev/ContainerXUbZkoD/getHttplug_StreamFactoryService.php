<?php

namespace ContainerXUbZkoD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_StreamFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'httplug.stream_factory' shared service.
     *
     * @return \Http\Message\StreamFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'message-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'StreamFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'discovery'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClassDiscovery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'discovery'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'StreamFactoryDiscovery.php';

        return $container->services['httplug.stream_factory'] = \Http\Discovery\StreamFactoryDiscovery::find();
    }
}