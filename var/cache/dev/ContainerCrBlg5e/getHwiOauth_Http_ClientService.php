<?php

namespace ContainerCrBlg5e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_Http_ClientService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hwi_oauth.http.client' shared service.
     *
     * @return \Http\Client\Common\HttpMethodsClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClientInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'httplug'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HttpClient.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'client-common'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HttpMethodsClientInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'client-common'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HttpMethodsClient.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'httplug'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HttpAsyncClient.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'client-common'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'PluginClient.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'httplug-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClientFactory'.\DIRECTORY_SEPARATOR.'ClientFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'httplug-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'ProfileClientFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'httplug-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClientFactory'.\DIRECTORY_SEPARATOR.'AutoDiscoveryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'client-common'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Plugin.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'client-common'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'ContentLengthPlugin.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-http'.\DIRECTORY_SEPARATOR.'client-common'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'RedirectPlugin.php';

        return $container->services['hwi_oauth.http.client'] = new \Http\Client\Common\HttpMethodsClient(($container->privates['Http\\Client\\Common\\PluginClientFactory'] ?? $container->getPluginClientFactoryService())->createClient((new \Http\HttplugBundle\Collector\ProfileClientFactory(new \Http\HttplugBundle\ClientFactory\AutoDiscoveryFactory(), ($container->privates['httplug.collector.collector'] ?? ($container->privates['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector(0))), ($container->privates['httplug.collector.formatter'] ?? $container->getHttplug_Collector_FormatterService()), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))))->createClient([]), [0 => new \Http\Client\Common\Plugin\ContentLengthPlugin(), 1 => new \Http\Client\Common\Plugin\RedirectPlugin(['preserve_header' => true, 'use_default_for_multiple' => true])], ['client_name' => 'app']), ($container->services['hwi_oauth.http.message_factory'] ?? $container->load('getHwiOauth_Http_MessageFactoryService')));
    }
}