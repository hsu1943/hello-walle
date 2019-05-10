<?php

require __DIR__ . '/../vendor/autoload.php';

use Walle\Walle;

$config = require __DIR__ . '/../config/main.php';
if(file_exists(__DIR__ . '/../config/main-local.php')) {
    $config = array_merge($config, require __DIR__ . '/../config/main-local.php');
}

Walle::getInstance($config);

Walle::$app->log->add(date('Y-m-d H:i:s') . 'log add test' . PHP_EOL);
Walle::$app->cache->set('testkey', 'test cache content', 10);
var_dump(Walle::$app->cache->get('testkey'));
var_dump(Walle::$app->getConfig('mail'));