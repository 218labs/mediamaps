<?php

namespace ContainerCrBlg5e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YTvNV8UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yTvNV8U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yTvNV8U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'user' => ['privates', '.errored..service_locator.yTvNV8U.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.yTvNV8U": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'translator' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}