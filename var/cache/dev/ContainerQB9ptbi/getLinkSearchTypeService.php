<?php

namespace ContainerQB9ptbi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkSearchTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Search\LinkSearchType' shared autowired service.
     *
     * @return \App\Form\Search\LinkSearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'LinkSearchType.php';

        return $container->privates['App\\Form\\Search\\LinkSearchType'] = new \App\Form\Search\LinkSearchType(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
