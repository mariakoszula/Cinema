   
  <?  use Doctrine\Common\ClassLoader,
        Doctrine\ORM\Configuration,
        Doctrine\ORM\EntityManager,
        Doctrine\DBAL\Types\Type,
        Doctrine\Common\Cache\ArrayCache,
        Doctrine\DBAL\Logging\EchoSqlLogger;

    // include the class loader directly
    require_once __DIR__ . '/Common/ClassLoader.php';

   $doctrineClassLoader = new ClassLoader('Doctrine', __DIR__ . '/../');
    $doctrineClassLoader->register();

    // Set up caches
    $config = new Configuration;
    $cache = new ArrayCache;
    $config->setMetadataCacheImpl($cache);
    $config->setQueryCacheImpl($cache);

    // Metadata Driver
    $driverImpl = $config->newDefaultAnnotationDriver(array(__DIR__."/entities"));
    $config->setMetadataDriverImpl($driverImpl);

    // Proxy configuration
    $config->setProxyDir(DB_PROXY_DIR);
    $config->setProxyNamespace(DB_PROXY_NAMESPACE);
    $config->setAutoGenerateProxyClasses(DB_PROXY_GEN);

    // Database connection information
    $connectionOptions = array(
        'driver' => 'pdo_pgsql',
        'path' => __DIR__ . '/db.pgsql',
  'host' => 'localhost',
  'dbname' => 'cinema',
  'user' => 'maria',
  'password' => 'haslo'
    );

    // Create EntityManager
    $em = EntityManager::create($connectionOptions, $config);