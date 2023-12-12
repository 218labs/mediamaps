<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_Security_OauthUtilsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'hwi_oauth.security.oauth_utils' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\OAuthUtils
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()), false, 'IS_AUTHENTICATED_REMEMBERED');

        $instance->addResourceOwnerMap(($container->services['hwi_oauth.resource_ownermap.secured_area'] ?? $container->load('getHwiOauth_ResourceOwnermap_SecuredAreaService')));

        return $instance;
    }
}
