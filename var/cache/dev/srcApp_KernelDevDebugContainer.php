<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJDdLqmi\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJDdLqmi/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJDdLqmi.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJDdLqmi\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJDdLqmi\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JDdLqmi',
    'container.build_id' => 'c2fce0c6',
    'container.build_time' => 1550504032,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJDdLqmi');
