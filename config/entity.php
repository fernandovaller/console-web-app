<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$config = Setup::createAnnotationMetadataConfiguration(
    [PATH_SRC . '/Entity'],
    ($_ENV['DOCTRINE_MODE'] === 'DEV')
);

$conn = [
    'url' =>  $_ENV['DATABASE_URL']
];

return EntityManager::create($conn, $config);
