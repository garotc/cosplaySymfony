<?php

namespace ContainerBGRepez;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4qoO2_XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4qoO2.X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4qoO2.X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'inscriptionSolo' => ['privates', '.errored..service_locator.4qoO2.X.App\\Entity\\InscriptionSolo', NULL, 'Cannot autowire service ".service_locator.4qoO2.X": it references class "App\\Entity\\InscriptionSolo" but no such service exists.'],
            'repo' => ['privates', 'App\\Repository\\InscriptionSoloRepository', 'getInscriptionSoloRepositoryService', true],
        ], [
            'em' => '?',
            'inscriptionSolo' => 'App\\Entity\\InscriptionSolo',
            'repo' => 'App\\Repository\\InscriptionSoloRepository',
        ]);
    }
}
