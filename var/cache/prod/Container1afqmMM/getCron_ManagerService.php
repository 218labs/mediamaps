<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCron_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cron.manager' shared service.
     *
     * @return \Cron\CronBundle\Cron\Manager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['cron.manager'] = new \Cron\CronBundle\Cron\Manager(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
