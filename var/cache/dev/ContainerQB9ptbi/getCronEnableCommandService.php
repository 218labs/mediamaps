<?php

namespace ContainerQB9ptbi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCronEnableCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Cron\CronBundle\Command\CronEnableCommand' shared service.
     *
     * @return \Cron\CronBundle\Command\CronEnableCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cron'.\DIRECTORY_SEPARATOR.'cron-bundle'.\DIRECTORY_SEPARATOR.'Cron'.\DIRECTORY_SEPARATOR.'CronCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cron'.\DIRECTORY_SEPARATOR.'cron-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CronEnableCommand.php';

        return $container->services['console.command.public_alias.Cron\\CronBundle\\Command\\CronEnableCommand'] = new \Cron\CronBundle\Command\CronEnableCommand($container);
    }
}
