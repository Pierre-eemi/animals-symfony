<?php

namespace ContainerQzBSfAv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PvjBq8nService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pvjBq8n' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pvjBq8n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\ContinentRepository', 'getContinentRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\ContinentRepository',
        ]);
    }
}
