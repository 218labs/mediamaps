<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldsetTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\FieldsetType' shared autowired service.
     *
     * @return \App\Form\Type\FieldsetType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Type\\FieldsetType'] = new \App\Form\Type\FieldsetType();
    }
}