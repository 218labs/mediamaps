<?php

namespace Container4xAh3uV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebPushGenerateKeysCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'BenTools\WebPushBundle\Command\WebPushGenerateKeysCommand' shared service.
     *
     * @return \BenTools\WebPushBundle\Command\WebPushGenerateKeysCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['BenTools\\WebPushBundle\\Command\\WebPushGenerateKeysCommand'] = $instance = new \BenTools\WebPushBundle\Command\WebPushGenerateKeysCommand();

        $instance->setName('webpush:generate:keys');

        return $instance;
    }
}
