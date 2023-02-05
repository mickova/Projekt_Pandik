<?php

namespace ContainerVaYoGqc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_88RLoroService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.88RLoro' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.88RLoro'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomePageController::homepage' => ['privates', '.service_locator.iGJ9TkI', 'get_ServiceLocator_IGJ9TkIService', true],
            'App\\Controller\\MaterialFormController::material' => ['privates', '.service_locator.qgU8LBr', 'get_ServiceLocator_QgU8LBrService', true],
            'App\\Controller\\ProfileController::my_profile' => ['privates', '.service_locator.ATt7aga', 'get_ServiceLocator_ATt7agaService', true],
            'App\\Controller\\ProfileController::profile' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RegisterFormController::test' => ['privates', '.service_locator.04rvWvA', 'get_ServiceLocator_04rvWvAService', true],
            'App\\Controller\\SettingFormController::new' => ['privates', '.service_locator.gLKJlzL', 'get_ServiceLocator_GLKJlzLService', true],
            'App\\Controller\\WelcomePageController::homepage' => ['privates', '.service_locator.iGJ9TkI', 'get_ServiceLocator_IGJ9TkIService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HomePageController:homepage' => ['privates', '.service_locator.iGJ9TkI', 'get_ServiceLocator_IGJ9TkIService', true],
            'App\\Controller\\MaterialFormController:material' => ['privates', '.service_locator.qgU8LBr', 'get_ServiceLocator_QgU8LBrService', true],
            'App\\Controller\\ProfileController:my_profile' => ['privates', '.service_locator.ATt7aga', 'get_ServiceLocator_ATt7agaService', true],
            'App\\Controller\\ProfileController:profile' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RegisterFormController:test' => ['privates', '.service_locator.04rvWvA', 'get_ServiceLocator_04rvWvAService', true],
            'App\\Controller\\SettingFormController:new' => ['privates', '.service_locator.gLKJlzL', 'get_ServiceLocator_GLKJlzLService', true],
            'App\\Controller\\WelcomePageController:homepage' => ['privates', '.service_locator.iGJ9TkI', 'get_ServiceLocator_IGJ9TkIService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HomePageController::homepage' => '?',
            'App\\Controller\\MaterialFormController::material' => '?',
            'App\\Controller\\ProfileController::my_profile' => '?',
            'App\\Controller\\ProfileController::profile' => '?',
            'App\\Controller\\RegisterFormController::test' => '?',
            'App\\Controller\\SettingFormController::new' => '?',
            'App\\Controller\\WelcomePageController::homepage' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomePageController:homepage' => '?',
            'App\\Controller\\MaterialFormController:material' => '?',
            'App\\Controller\\ProfileController:my_profile' => '?',
            'App\\Controller\\ProfileController:profile' => '?',
            'App\\Controller\\RegisterFormController:test' => '?',
            'App\\Controller\\SettingFormController:new' => '?',
            'App\\Controller\\WelcomePageController:homepage' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
