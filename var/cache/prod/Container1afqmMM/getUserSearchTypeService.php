<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserSearchTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Search\UserSearchType' shared autowired service.
     *
     * @return \App\Form\Search\UserSearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Search\\UserSearchType'] = new \App\Form\Search\UserSearchType();
    }
}
