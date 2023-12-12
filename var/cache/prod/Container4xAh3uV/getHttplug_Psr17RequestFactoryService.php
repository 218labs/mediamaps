<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_Psr17RequestFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'httplug.psr17_request_factory' shared service.
     *
     * @return \Psr\Http\Message\RequestFactoryInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['httplug.psr17_request_factory'] = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
    }
}