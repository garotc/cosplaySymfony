<?php

namespace ContainerBGRepez;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_RememberMe_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.remember_me.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\RememberMeLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RememberMeLogoutListener.php';

        return $container->privates['security.logout.listener.remember_me.main'] = new \Symfony\Component\Security\Http\EventListener\RememberMeLogoutListener(($container->privates['security.authentication.rememberme.services.simplehash.main'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService')));
    }
}
