<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCronReportsTruncateCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.Cron\CronBundle\Command\CronReportsTruncateCommand' shared service.
     *
     * @return \Cron\CronBundle\Command\CronReportsTruncateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.Cron\\CronBundle\\Command\\CronReportsTruncateCommand'] = new \Cron\CronBundle\Command\CronReportsTruncateCommand($container);
    }
}