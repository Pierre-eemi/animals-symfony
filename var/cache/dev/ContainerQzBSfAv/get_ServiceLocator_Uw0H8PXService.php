<?php

namespace ContainerQzBSfAv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uw0H8PXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Uw0H8PX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Uw0H8PX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'continent' => ['privates', '.errored..service_locator.Uw0H8PX.App\\Entity\\Continent', NULL, 'Cannot autowire service ".service_locator.Uw0H8PX": it references class "App\\Entity\\Continent" but no such service exists.'],
        ], [
            'continent' => 'App\\Entity\\Continent',
        ]);
    }
}
