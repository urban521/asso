<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQEelZqW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQEelZqW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQEelZqW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQEelZqW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQEelZqW\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QEelZqW',
    'container.build_id' => 'bc145782',
    'container.build_time' => 1550759251,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQEelZqW');
