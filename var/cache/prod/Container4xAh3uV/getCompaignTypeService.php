<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompaignTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CompaignType' shared autowired service.
     *
     * @return \App\Form\CompaignType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CompaignType'] = new \App\Form\CompaignType();
    }
}
