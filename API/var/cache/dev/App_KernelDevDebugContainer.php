<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWwrS223\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWwrS223/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWwrS223.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWwrS223\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWwrS223\App_KernelDevDebugContainer([
    'container.build_hash' => 'WwrS223',
    'container.build_id' => '769a19b1',
    'container.build_time' => 1613721520,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWwrS223');
