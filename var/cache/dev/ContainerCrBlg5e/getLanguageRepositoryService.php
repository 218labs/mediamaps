<?php

namespace ContainerCrBlg5e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLanguageRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\LanguageRepository' shared autowired service.
     *
     * @return \App\Repository\LanguageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'LanguageRepository.php';

        return $container->privates['App\\Repository\\LanguageRepository'] = new \App\Repository\LanguageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
