<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaGeographicalSystemTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\MediaGeographicalSystemType' shared autowired service.
     *
     * @return \App\Form\MediaGeographicalSystemType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\MediaGeographicalSystemType'] = new \App\Form\MediaGeographicalSystemType();
    }
}