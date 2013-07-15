<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Skeleton\Application(__DIR__ . '/..', $debug = true);
$app->inject(array(
    'routing.resource' => 'routing.yml',
    'twig.path' => $app['root_dir'] . '/views',
));
$app->run();
