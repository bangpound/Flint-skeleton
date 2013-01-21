<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Skeleton\Application(__DIR__ . '/..', $debug = true);
$app['twig.path'] = $app['root_dir'] . '/views';
$app->run();
