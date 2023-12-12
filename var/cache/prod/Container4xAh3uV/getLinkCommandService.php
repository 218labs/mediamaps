<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Command\LinkCommand' shared autowired service.
     *
     * @return \App\Command\LinkCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));
        $b = new \BenTools\WebPushBundle\Sender\PushMessageSender(['VAPID' => ['subject' => 'localhost', 'publicKey' => 'BDMoknezav3-yWOZ4d60vl1rcTCnKwhzVHs0CctZZ4a2IVXehyClDKzHRAzuAYzNBmi3wZMSXctcI8mpIadUk1E', 'privateKey' => 'XSxTnOveiVOdvhzZ3knQqwmJLQuQiPqvEIqUyVOvnQY']]);

        $container->privates['App\\Command\\LinkCommand'] = $instance = new \App\Command\LinkCommand($a, ($container->privates['BenTools\\WebPushBundle\\Model\\Subscription\\UserSubscriptionManagerRegistry'] ?? $container->load('getUserSubscriptionManagerRegistryService')), $b, new \App\Service\UserSubscriptionNotification($b, $a));

        $instance->setName('link:check');

        return $instance;
    }
}
