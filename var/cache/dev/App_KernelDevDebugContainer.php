<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHjoDXgH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHjoDXgH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHjoDXgH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHjoDXgH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHjoDXgH\App_KernelDevDebugContainer([
    'container.build_hash' => 'HjoDXgH',
    'container.build_id' => '858bbef0',
    'container.build_time' => 1659183464,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHjoDXgH');
