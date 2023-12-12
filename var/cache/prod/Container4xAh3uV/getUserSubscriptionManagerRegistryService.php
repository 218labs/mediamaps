<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserSubscriptionManagerRegistryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'BenTools\WebPushBundle\Model\Subscription\UserSubscriptionManagerRegistry' shared service.
     *
     * @return \BenTools\WebPushBundle\Model\Subscription\UserSubscriptionManagerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['BenTools\\WebPushBundle\\Model\\Subscription\\UserSubscriptionManagerRegistry'] = $instance = new \BenTools\WebPushBundle\Model\Subscription\UserSubscriptionManagerRegistry();

        $instance->register('App\\Entity\\User', new \App\Service\UserSubscriptionManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'))));

        return $instance;
    }
}
