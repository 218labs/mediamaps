<?php

namespace ContainerCrBlg5e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HSGQGAJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hSGQGAJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hSGQGAJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'table' => ['privates', 'App\\Service\\Table', 'getTableService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'user' => ['privates', '.errored..service_locator.hSGQGAJ.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.hSGQGAJ": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'table' => 'App\\Service\\Table',
            'translator' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}