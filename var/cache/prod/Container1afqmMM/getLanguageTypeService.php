<?php

namespace Container1afqmMM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLanguageTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\LanguageType' shared autowired service.
     *
     * @return \App\Form\LanguageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\LanguageType'] = new \App\Form\LanguageType();
    }
}