<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHJZSIse\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHJZSIse/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHJZSIse.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHJZSIse\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHJZSIse\App_KernelDevDebugContainer([
    'container.build_hash' => 'HJZSIse',
    'container.build_id' => '341f14f4',
    'container.build_time' => 1620720568,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHJZSIse');
