<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBcqqrzk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBcqqrzk/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerBcqqrzk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerBcqqrzk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerBcqqrzk\appProdProjectContainer([
    'container.build_hash' => 'Bcqqrzk',
    'container.build_id' => '375cb17f',
    'container.build_time' => 1635974684,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBcqqrzk');
