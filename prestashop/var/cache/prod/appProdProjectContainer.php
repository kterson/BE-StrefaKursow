<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPg8rpwx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPg8rpwx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPg8rpwx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPg8rpwx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPg8rpwx\appProdProjectContainer([
    'container.build_hash' => 'Pg8rpwx',
    'container.build_id' => '8afd035c',
    'container.build_time' => 1636663698,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPg8rpwx');
