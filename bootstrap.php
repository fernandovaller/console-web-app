<?php

require __DIR__ . '/vendor/autoload.php';

define('PATH_ROOT', __DIR__);
define('PATH_SRC', __DIR__ . '/src');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
