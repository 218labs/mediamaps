<?php

namespace ContainerCrBlg5e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBomoIcal_IcsProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'bomo_ical.ics_provider' shared service.
     *
     * @return \BOMO\IcalBundle\Provider\IcsProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'bomo'.\DIRECTORY_SEPARATOR.'ical-bundle'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'IcsProvider.php';

        return $container->services['bomo_ical.ics_provider'] = new \BOMO\IcalBundle\Provider\IcsProvider();
    }
}
