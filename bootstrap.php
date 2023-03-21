<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__ . "/src"),
    isDevMode: true,
    cache: null,
    proxyDir: null
);

// configuring the database connection
$connection = DriverManager::getConnection([
    'driver' => 'pdo_mysql',
    'host' => 'localhost', // localhost:8889 sur mamp par exemple
    'user' => 'root',
    'password' => '',  // 'root' sur mamp  
    'dbname' => ''
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
