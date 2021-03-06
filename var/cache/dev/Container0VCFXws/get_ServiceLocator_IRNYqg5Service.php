<?php

namespace Container0VCFXws;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IRNYqg5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IRNYqg5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IRNYqg5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\BundleCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\BundleCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\BundleCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\BundleCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\BundleCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\BundleCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\BundleCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\BundleCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\BundleCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\PlatformCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\PlatformCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\PlatformCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\PlatformCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\PlatformCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\PlatformCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\PlatformCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PlatformCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PlatformCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProviderCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\ProviderCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\ProviderCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\ProviderCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\ProviderCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\ProviderCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\ProviderCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProviderCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProviderCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\Admin\\BundleCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\BundleCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\BundleCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\BundleCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\BundleCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\BundleCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\BundleCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\BundleCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\BundleCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\BundleCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\BundleCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\PlatformCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\PlatformCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\PlatformCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\PlatformCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\PlatformCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\PlatformCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\PlatformCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\PlatformCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PlatformCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\PlatformCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\PlatformCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProviderCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\ProviderCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\ProviderCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\ProviderCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\ProviderCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\ProviderCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\ProviderCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ProviderCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProviderCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ProviderCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ProviderCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\Admin\\BundleCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\BundleCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\BundleCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\BundleCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\BundleCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\BundleCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\BundleCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\BundleCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\BundleCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\BundleCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\BundleCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\BundleCrudController::delete' => '?',
            'App\\Controller\\Admin\\BundleCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\BundleCrudController::detail' => '?',
            'App\\Controller\\Admin\\BundleCrudController::edit' => '?',
            'App\\Controller\\Admin\\BundleCrudController::index' => '?',
            'App\\Controller\\Admin\\BundleCrudController::new' => '?',
            'App\\Controller\\Admin\\BundleCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\BundleCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\BundleCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::delete' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::detail' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::edit' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::index' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::new' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\PlatformCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::delete' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::detail' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::edit' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::index' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::new' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ProviderCrudController::updateEntity' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\BundleCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\BundleCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\BundleCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\BundleCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\BundleCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\BundleCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\BundleCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\BundleCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\BundleCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\BundleCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\BundleCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\BundleCrudController:delete' => '?',
            'App\\Controller\\Admin\\BundleCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\BundleCrudController:detail' => '?',
            'App\\Controller\\Admin\\BundleCrudController:edit' => '?',
            'App\\Controller\\Admin\\BundleCrudController:index' => '?',
            'App\\Controller\\Admin\\BundleCrudController:new' => '?',
            'App\\Controller\\Admin\\BundleCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\BundleCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\BundleCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:delete' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:detail' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:edit' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:index' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:new' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\PlatformCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:delete' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:detail' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:edit' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:index' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:new' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ProviderCrudController:updateEntity' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
