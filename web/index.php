<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Skeleton\Application(__DIR__ . '/..', $debug = true);
$app->configure(__DIR__ . '/../config/config.json');
$app->run();
