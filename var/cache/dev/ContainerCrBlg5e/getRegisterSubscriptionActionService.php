<?php

namespace ContainerCrBlg5e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterSubscriptionActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'BenTools\WebPushBundle\Action\RegisterSubscriptionAction' shared service.
     *
     * @return \BenTools\WebPushBundle\Action\RegisterSubscriptionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'bentools'.\DIRECTORY_SEPARATOR.'webpush-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'RegisterSubscriptionAction.php';

        return $container->services['BenTools\\WebPushBundle\\Action\\RegisterSubscriptionAction'] = new \BenTools\WebPushBundle\Action\RegisterSubscriptionAction(($container->privates['BenTools\\WebPushBundle\\Model\\Subscription\\UserSubscriptionManagerRegistry'] ?? $container->load('getUserSubscriptionManagerRegistryService')));
    }
}
