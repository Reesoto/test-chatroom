<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTr3c8Q1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTr3c8Q1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTr3c8Q1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTr3c8Q1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTr3c8Q1\App_KernelDevDebugContainer([
    'container.build_hash' => 'Tr3c8Q1',
    'container.build_id' => 'e696745c',
    'container.build_time' => 1634568507,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTr3c8Q1');