<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZIFkArt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZIFkArt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZIFkArt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZIFkArt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZIFkArt\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZIFkArt',
    'container.build_id' => 'a59f4fbb',
    'container.build_time' => 1613034202,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZIFkArt');