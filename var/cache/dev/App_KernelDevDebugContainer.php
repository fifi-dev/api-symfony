<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCfyeqVM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCfyeqVM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCfyeqVM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCfyeqVM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCfyeqVM\App_KernelDevDebugContainer([
    'container.build_hash' => 'CfyeqVM',
    'container.build_id' => 'c774abdf',
    'container.build_time' => 1670321627,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCfyeqVM');
