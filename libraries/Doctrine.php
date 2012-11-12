<?php

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\DBAL\Logging\EchoSQLLogger;

class Doctrine{

  public $em = null;

  public function __construct()
  {

    require_once URL.'/Doctrine/Common/ClassLoader.php';

    $doctrineClassLoader = new ClassLoader(URL.'Doctrine',  '/');
    $doctrineClassLoader->register();
    $entitiesClassLoader = new ClassLoader(URL.'entities', '/entities/');
    $entitiesClassLoader->register();
    $proxiesClassLoader = new ClassLoader(URL.'Proxies', '/proxies/');
    $proxiesClassLoader->register();

    // Set up caches
    $config = new Configuration;
    $cache = new ArrayCache;
    $config->setMetadataCacheImpl($cache);
    $driverImpl = $config->newDefaultAnnotationDriver(array('/models/Entities'));
    $config->setMetadataDriverImpl($driverImpl);
    $config->setQueryCacheImpl($cache);

    $config->setQueryCacheImpl($cache);

    // Proxy configuration
    $config->setProxyDir('/proxies');
    $config->setProxyNamespace('Proxies');

    // Set up logger
    $logger = new EchoSQLLogger;
    //$config->setSQLLogger($logger);

    $config->setAutoGenerateProxyClasses( TRUE );


    // Database connection information
    $connectionOptions = array(
  'driver' => DB_TYPE,
  'path' => __DIR__ . '/db.pgsql',
  'host' => DB_HOST,
  'dbname' => DB_NAME,
  'user' => DB_USER,
  'password' => DB_PASS       
    );


    // Create EntityManager
    $this->em = EntityManager::create($connectionOptions, $config);
  }
}
