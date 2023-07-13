<?php

namespace ContainerMmQaMub;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RMTETyoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RMTETyo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RMTETyo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::create' => ['privates', '.service_locator.6LIZMcv', 'get_ServiceLocator_6LIZMcvService', true],
            'App\\Controller\\ArticleController::lire' => ['privates', '.service_locator.6LIZMcv', 'get_ServiceLocator_6LIZMcvService', true],
            'App\\Controller\\MainController::index' => ['privates', '.service_locator.3_SXYuZ', 'get_ServiceLocator_3SXYuZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.UnjcfIq', 'get_ServiceLocator_UnjcfIqService', true],
            'App\\Controller\\TypCategoController::index' => ['privates', '.service_locator.7KlKCrt', 'get_ServiceLocator_7KlKCrtService', true],
            'App\\Controller\\UsersAuthenticatorController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ArticleController:create' => ['privates', '.service_locator.6LIZMcv', 'get_ServiceLocator_6LIZMcvService', true],
            'App\\Controller\\ArticleController:lire' => ['privates', '.service_locator.6LIZMcv', 'get_ServiceLocator_6LIZMcvService', true],
            'App\\Controller\\MainController:index' => ['privates', '.service_locator.3_SXYuZ', 'get_ServiceLocator_3SXYuZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.UnjcfIq', 'get_ServiceLocator_UnjcfIqService', true],
            'App\\Controller\\TypCategoController:index' => ['privates', '.service_locator.7KlKCrt', 'get_ServiceLocator_7KlKCrtService', true],
            'App\\Controller\\UsersAuthenticatorController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ArticleController::create' => '?',
            'App\\Controller\\ArticleController::lire' => '?',
            'App\\Controller\\MainController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\TypCategoController::index' => '?',
            'App\\Controller\\UsersAuthenticatorController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:create' => '?',
            'App\\Controller\\ArticleController:lire' => '?',
            'App\\Controller\\MainController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\TypCategoController:index' => '?',
            'App\\Controller\\UsersAuthenticatorController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
