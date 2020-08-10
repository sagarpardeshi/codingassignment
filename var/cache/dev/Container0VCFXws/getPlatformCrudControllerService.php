<?php

namespace Container0VCFXws;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatformCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\PlatformCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PlatformCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Contracts\\Controller\\CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Controller\\AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\Admin\\PlatformCrudController.php';

        $container->services['App\\Controller\\Admin\\PlatformCrudController'] = $instance = new \App\Controller\Admin\PlatformCrudController();

        $instance->setContainer(($container->privates['.service_locator.laElj3_'] ?? $container->load('get_ServiceLocator_LaElj3Service'))->withContext('App\\Controller\\Admin\\PlatformCrudController', $container));

        return $instance;
    }
}
