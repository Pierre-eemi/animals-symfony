<?php

namespace ContainerQzBSfAv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContinentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ContinentController' shared autowired service.
     *
     * @return \App\Controller\ContinentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ContinentController.php';

        $container->services['App\\Controller\\ContinentController'] = $instance = new \App\Controller\ContinentController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ContinentController', $container));

        return $instance;
    }
}
