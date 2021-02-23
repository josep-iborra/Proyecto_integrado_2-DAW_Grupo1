<?php

namespace ContainerIgVnnU9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmpresaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmpresaController' shared autowired service.
     *
     * @return \App\Controller\EmpresaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EmpresaController.php';

        return $container->services['App\\Controller\\EmpresaController'] = new \App\Controller\EmpresaController(($container->privates['App\\Repository\\EmpresaRepository'] ?? $container->load('getEmpresaRepositoryService')));
    }
}