<?php

namespace ContainerIgVnnU9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResenaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ResenaController' shared autowired service.
     *
     * @return \App\Controller\ResenaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ResenaController.php';

        return $container->services['App\\Controller\\ResenaController'] = new \App\Controller\ResenaController(($container->privates['App\\Repository\\ResenaRepository'] ?? $container->load('getResenaRepositoryService')));
    }
}
