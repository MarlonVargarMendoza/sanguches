<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8gGkSsT\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8gGkSsT/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container8gGkSsT.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container8gGkSsT\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container8gGkSsT\appAppKernelProdContainer([
    'container.build_hash' => '8gGkSsT',
    'container.build_id' => '423afcae',
    'container.build_time' => 1722299295,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8gGkSsT');
