<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLLsgFQ3\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLLsgFQ3/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLLsgFQ3.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLLsgFQ3\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLLsgFQ3\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LLsgFQ3',
    'container.build_id' => 'b2dabfa1',
    'container.build_time' => 1570885720,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLLsgFQ3');
