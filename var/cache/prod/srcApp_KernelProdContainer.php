<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZaT9Gbg\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZaT9Gbg/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerZaT9Gbg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerZaT9Gbg\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerZaT9Gbg\srcApp_KernelProdContainer([
    'container.build_hash' => 'ZaT9Gbg',
    'container.build_id' => 'b4cbfcb8',
    'container.build_time' => 1617816919,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZaT9Gbg');
