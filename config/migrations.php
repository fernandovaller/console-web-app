<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\Migrations\Configuration\Configuration;
use Doctrine\Migrations\Configuration\Connection\ExistingConnection;
use Doctrine\Migrations\Configuration\Migration\ExistingConfiguration;
use Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration;
use Doctrine\Migrations\DependencyFactory;

$connection = DriverManager::getConnection([
    'url' =>  $_ENV['DATABASE_URL']
]);

$configuration = new Configuration($connection);

$configuration->addMigrationsDirectory('Homevaller\SymfonyRoutes\Migrations', 'src/Migrations');
$configuration->setAllOrNothing(true);
$configuration->setCheckDatabasePlatform(false);


$storageConfiguration = new TableMetadataStorageConfiguration();
$storageConfiguration->setTableName('doctrine_migration_versions');

$configuration->setMetadataStorageConfiguration($storageConfiguration);

$dependencyFactory = DependencyFactory::fromConnection(
    new ExistingConfiguration($configuration),
    new ExistingConnection($connection)
);

return $dependencyFactory;
