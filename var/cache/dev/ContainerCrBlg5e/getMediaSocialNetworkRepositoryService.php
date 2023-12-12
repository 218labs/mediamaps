<?php

namespace ContainerCrBlg5e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaSocialNetworkRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\MediaSocialNetworkRepository' shared autowired service.
     *
     * @return \App\Repository\MediaSocialNetworkRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'MediaSocialNetworkRepository.php';

        return $container->privates['App\\Repository\\MediaSocialNetworkRepository'] = new \App\Repository\MediaSocialNetworkRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
