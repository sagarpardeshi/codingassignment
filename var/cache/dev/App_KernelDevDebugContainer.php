<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0VCFXws\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0VCFXws/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0VCFXws.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0VCFXws\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0VCFXws\App_KernelDevDebugContainer([
    'container.build_hash' => '0VCFXws',
    'container.build_id' => '3405f542',
    'container.build_time' => 1596656473,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0VCFXws');