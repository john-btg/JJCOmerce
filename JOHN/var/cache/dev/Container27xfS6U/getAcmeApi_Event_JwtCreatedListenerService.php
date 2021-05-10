<?php

namespace Container27xfS6U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAcmeApi_Event_JwtCreatedListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'acme_api.event.jwt_created_listener' shared autowired service.
     *
     * @return \App\EventListener\JWTCreatedListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/JWTCreatedListener.php';

        return $container->privates['acme_api.event.jwt_created_listener'] = new \App\EventListener\JWTCreatedListener(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
