<?php

namespace ContainerVLxegqn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E2kC38QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E2kC38Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E2kC38Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\APICatalogController::ModifieProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APICatalogController::addProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APICatalogController::getProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APICatalogController::listAllProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIOrderController::getOrder' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIOrderController::getSpecificOrder' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIShoppingCartController::getCart' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIShoppingCartController::validate' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\RegisterController::register' => ['privates', '.service_locator.kRcLJGk', 'get_ServiceLocator_KRcLJGkService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\APICatalogController:ModifieProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APICatalogController:addProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APICatalogController:getProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APICatalogController:listAllProduct' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIOrderController:getOrder' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIOrderController:getSpecificOrder' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIShoppingCartController:getCart' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\APIShoppingCartController:validate' => ['privates', '.service_locator.TQPxKGs', 'get_ServiceLocator_TQPxKGsService', true],
            'App\\Controller\\RegisterController:register' => ['privates', '.service_locator.kRcLJGk', 'get_ServiceLocator_KRcLJGkService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\APICatalogController::ModifieProduct' => '?',
            'App\\Controller\\APICatalogController::addProduct' => '?',
            'App\\Controller\\APICatalogController::getProduct' => '?',
            'App\\Controller\\APICatalogController::listAllProduct' => '?',
            'App\\Controller\\APIOrderController::getOrder' => '?',
            'App\\Controller\\APIOrderController::getSpecificOrder' => '?',
            'App\\Controller\\APIShoppingCartController::getCart' => '?',
            'App\\Controller\\APIShoppingCartController::validate' => '?',
            'App\\Controller\\RegisterController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\APICatalogController:ModifieProduct' => '?',
            'App\\Controller\\APICatalogController:addProduct' => '?',
            'App\\Controller\\APICatalogController:getProduct' => '?',
            'App\\Controller\\APICatalogController:listAllProduct' => '?',
            'App\\Controller\\APIOrderController:getOrder' => '?',
            'App\\Controller\\APIOrderController:getSpecificOrder' => '?',
            'App\\Controller\\APIShoppingCartController:getCart' => '?',
            'App\\Controller\\APIShoppingCartController:validate' => '?',
            'App\\Controller\\RegisterController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}