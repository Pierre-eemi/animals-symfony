<?php

namespace ContainerQzBSfAv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J9y1Q9FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J9y1Q9F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J9y1Q9F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'personne' => ['privates', '.errored..service_locator.J9y1Q9F.App\\Entity\\Personne', NULL, 'Cannot autowire service ".service_locator.J9y1Q9F": it references class "App\\Entity\\Personne" but no such service exists.'],
        ], [
            'personne' => 'App\\Entity\\Personne',
        ]);
    }
}
