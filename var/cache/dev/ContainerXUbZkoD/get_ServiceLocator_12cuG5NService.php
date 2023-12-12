<?php

namespace ContainerXUbZkoD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_12cuG5NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.12cuG5N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.12cuG5N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'csrfTokenManager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'csrfTokenManager' => '?',
            'translator' => '?',
        ]);
    }
}