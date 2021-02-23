<?php

namespace ContainerICC4nFO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.access.decision_manager'] ?? $container->load('getSecurity_Access_DecisionManagerService')), ($container->privates['security.access_map'] ?? ($container->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')));
    }
}
