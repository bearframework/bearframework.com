<?php

require __DIR__ . '/../vendor/autoload.php';
$app = new App(
    [
        'appDir' => __DIR__ . '/../app/',
        'addonsDir' => __DIR__ . '/../addons/',
        'dataDir' => __DIR__ . '/../data/',
        'logsDir' => __DIR__ . '/../logs/',
        'displayErrors' => true,
        'environment' => 'development'
    ]
);
$app->run();
