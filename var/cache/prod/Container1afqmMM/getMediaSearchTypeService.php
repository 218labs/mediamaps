<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaSearchTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Search\MediaSearchType' shared autowired service.
     *
     * @return \App\Form\Search\MediaSearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Search\\MediaSearchType'] = new \App\Form\Search\MediaSearchType(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
