<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQxgszbQ\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQxgszbQ/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQxgszbQ.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQxgszbQ\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerQxgszbQ\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'QxgszbQ',
    'container.build_id' => 'b4b868ed',
    'container.build_time' => 1531940896,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerQxgszbQ');