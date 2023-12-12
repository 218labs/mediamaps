<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'HWI\Bundle\OAuthBundle\Controller\ConnectController' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Controller\ConnectController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMapLocator();
        $a->add('secured_area', ($container->services['hwi_oauth.resource_ownermap.secured_area'] ?? $container->load('getHwiOauth_ResourceOwnermap_SecuredAreaService')));

        $container->services['HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController'] = $instance = new \HWI\Bundle\OAuthBundle\Controller\ConnectController(($container->privates['hwi_oauth.security.oauth_utils'] ?? $container->load('getHwiOauth_Security_OauthUtilsService')), $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false, 'IS_AUTHENTICATED_REMEMBERED', false, 'hwi_oauth_connect', false, $container->parameters['hwi_oauth.firewall_names']);

        $instance->setContainer($container);

        return $instance;
    }
}
