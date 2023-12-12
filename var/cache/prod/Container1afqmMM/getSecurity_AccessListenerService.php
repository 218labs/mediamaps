<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.access.decision_manager'] ?? $container->getSecurity_Access_DecisionManagerService()), ($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), ($container->privates['security.authentication.manager'] ?? ($container->privates['security.authentication.manager'] = new \Symfony\Component\Security\Http\Authentication\NoopAuthenticationManager())), false);
    }
}
