<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_UriFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'httplug.uri_factory' shared service.
     *
     * @return \Http\Message\UriFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['httplug.uri_factory'] = \Http\Discovery\UriFactoryDiscovery::find();
    }
}
