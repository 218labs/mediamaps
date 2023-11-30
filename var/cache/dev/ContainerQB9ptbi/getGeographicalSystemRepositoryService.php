<?php

namespace ContainerQB9ptbi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeographicalSystemRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\GeographicalSystemRepository' shared autowired service.
     *
     * @return \App\Repository\GeographicalSystemRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'GeographicalSystemRepository.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Repository\\GeographicalSystemRepository'])) {
            return $container->privates['App\\Repository\\GeographicalSystemRepository'];
        }

        return $container->privates['App\\Repository\\GeographicalSystemRepository'] = new \App\Repository\GeographicalSystemRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), $a, ($container->privates['App\\Repository\\SettingRepository'] ?? $container->getSettingRepositoryService()));
    }
}
