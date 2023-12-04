<?php

namespace ContainerXUbZkoD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\CategoryRepository' shared autowired service.
     *
     * @return \App\Repository\CategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CategoryRepository.php';

        return $container->privates['App\\Repository\\CategoryRepository'] = new \App\Repository\CategoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
