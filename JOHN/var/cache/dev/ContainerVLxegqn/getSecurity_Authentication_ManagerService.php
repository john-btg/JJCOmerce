<?php

namespace ContainerVLxegqn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationProviderManager.php';

        $container->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.authentication.provider.dao.login'] ?? $container->load('getSecurity_Authentication_Provider_Dao_LoginService'));
            yield 1 => ($container->privates['security.authentication.provider.anonymous.login'] ?? ($container->privates['security.authentication.provider.anonymous.login'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($container->getParameter('container.build_hash'))));
            yield 2 => ($container->privates['security.authentication.provider.anonymous.register'] ?? ($container->privates['security.authentication.provider.anonymous.register'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($container->getParameter('container.build_hash'))));
            yield 3 => ($container->privates['security.authentication.provider.anonymous.products'] ?? ($container->privates['security.authentication.provider.anonymous.products'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($container->getParameter('container.build_hash'))));
            yield 4 => ($container->privates['security.authentication.provider.anonymous.product'] ?? ($container->privates['security.authentication.provider.anonymous.product'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($container->getParameter('container.build_hash'))));
            yield 5 => ($container->privates['security.authentication.provider.guard.api'] ?? $container->load('getSecurity_Authentication_Provider_Guard_ApiService'));
            yield 6 => ($container->privates['security.authentication.provider.guard.main'] ?? $container->load('getSecurity_Authentication_Provider_Guard_MainService'));
            yield 7 => ($container->privates['security.authentication.provider.anonymous.main'] ?? ($container->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($container->getParameter('container.build_hash'))));
        }, 8), true);

        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}
