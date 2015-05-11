<?php

require_once __DIR__.'/vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(
    array(__DIR__."/config/yaml"),
    $isDevMode
);

$connectionParams = array(
    'dbname' => 'test',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$entityManager = EntityManager::create($conn, $config);
