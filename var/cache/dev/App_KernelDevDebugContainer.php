<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQB9ptbi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQB9ptbi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQB9ptbi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQB9ptbi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQB9ptbi\App_KernelDevDebugContainer([
    'container.build_hash' => 'QB9ptbi',
    'container.build_id' => 'cfb1b38b',
    'container.build_time' => 1701362338,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQB9ptbi');
