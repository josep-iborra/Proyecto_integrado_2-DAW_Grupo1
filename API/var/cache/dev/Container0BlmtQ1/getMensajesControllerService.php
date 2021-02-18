<?php

namespace Container0BlmtQ1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMensajesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MensajesController' shared autowired service.
     *
     * @return \App\Controller\MensajesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'MensajesController.php';

        return $container->services['App\\Controller\\MensajesController'] = new \App\Controller\MensajesController(($container->privates['App\\Repository\\MensajesRepository'] ?? $container->load('getMensajesRepositoryService')));
    }
}
