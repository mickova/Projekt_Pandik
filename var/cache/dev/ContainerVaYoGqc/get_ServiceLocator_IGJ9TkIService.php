<?php

namespace ContainerVaYoGqc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IGJ9TkIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iGJ9TkI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iGJ9TkI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'auth' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'auth' => '?',
            'doctrine' => '?',
            'security' => '?',
        ]);
    }
}
