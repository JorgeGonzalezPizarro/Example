<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3cYaCYr\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3cYaCYr/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container3cYaCYr.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container3cYaCYr\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container3cYaCYr\srcDevDebugProjectContainer(array(
    'container.build_hash' => '3cYaCYr',
    'container.build_id' => '814ec5cb',
    'container.build_time' => 1537809731,
), __DIR__.\DIRECTORY_SEPARATOR.'Container3cYaCYr');