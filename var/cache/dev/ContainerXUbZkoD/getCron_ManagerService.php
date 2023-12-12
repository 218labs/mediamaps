<?php

namespace ContainerXUbZkoD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCron_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cron.manager' shared service.
     *
     * @return \Cron\CronBundle\Cron\Manager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cron'.\DIRECTORY_SEPARATOR.'cron-bundle'.\DIRECTORY_SEPARATOR.'Cron'.\DIRECTORY_SEPARATOR.'Manager.php';

        return $container->services['cron.manager'] = new \Cron\CronBundle\Cron\Manager(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}