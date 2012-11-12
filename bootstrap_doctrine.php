<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require 'config.php';
require 'Doctrine/ORM/Tools/Setup.php';

Doctrine\ORM\Tools\Setup::registerAutoloadPEAR();

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entities"), $isDevMode);

$conn = array(
  'driver' => DB_TYPE,
  'path' => __DIR__ . '/db.pgsql',
  'host' => DB_HOST,
  'dbname' => DB_NAME,
  'user' => DB_USER,
  'password' => DB_PASS
);

$em = \Doctrine\ORM\EntityManager::create($conn, $config);
