<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHNM2697\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHNM2697/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHNM2697.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHNM2697\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHNM2697\App_KernelDevDebugContainer([
    'container.build_hash' => 'HNM2697',
    'container.build_id' => '98ac6e33',
    'container.build_time' => 1608196030,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHNM2697');
