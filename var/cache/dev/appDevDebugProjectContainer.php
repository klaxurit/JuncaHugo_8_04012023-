<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMn6sdwb\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMn6sdwb/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerMn6sdwb.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerMn6sdwb\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerMn6sdwb\appDevDebugProjectContainer([
    'container.build_hash' => 'Mn6sdwb',
    'container.build_id' => 'b2029df5',
    'container.build_time' => 1673273113,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMn6sdwb');
