<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDwXhWxp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDwXhWxp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDwXhWxp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDwXhWxp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDwXhWxp\App_KernelDevDebugContainer([
    'container.build_hash' => 'DwXhWxp',
    'container.build_id' => 'd3a29fee',
    'container.build_time' => 1608019838,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDwXhWxp');
