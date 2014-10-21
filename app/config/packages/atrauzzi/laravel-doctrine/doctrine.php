<?php
return array(

    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | This array passes right through to the EntityManager factory.
    |
    | http://www.doctrine-project.org/documentation/manual/2_0/en/dbal
    |
    */

    'connection'                   => array(
        'driver'   => 'pdo_mysql',
        'user'     => 'doctrine2',
        'password' => 'test',
        'dbname'   => 'doctrine2',
        'host'     => 'localhost',
        'prefix'   => '',
        'charset'  => 'utf8'
    ),
    /*
    |--------------------------------------------------------------------------
    | Metadata Sources
    |--------------------------------------------------------------------------
    |
    | This array passes right through to the EntityManager factory.
    |
    | http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/configuration.html
    |
    */

    'metadata'                     => array(
        __DIR__ . '/../../../../../vendor/gzero/cms/src/Gzero/Entity',
        __DIR__ . '/../../../../../app/models'
    ),
    /*
    |--------------------------------------------------------------------------
    | Sets the directory where Doctrine generates any proxy classes, including
    | with which namespace.
    |--------------------------------------------------------------------------
    |
    | http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/configuration.html
    |
    */

    'proxy_classes'                => array(
        'auto_generate' => TRUE,
        'directory'     => NULL,
        'namespace'     => NULL,
    ),
    /*
    |--------------------------------------------------------------------------
    | Cache providers, supports apc, xcache, memcache, redis
    | Only redis and memcache have additionals configurations
    |--------------------------------------------------------------------------
    */

    'cache'                        => array(
        'provider' => 'redis',
        'redis'    => array(
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 1
        ),
        'memcache' => array(
            'host' => '127.0.0.1',
            'port' => 11211
        )
    ),
    'migrations'                   => array(
        'directory'  => '/database/doctrine-migrations',
        'namespace'  => 'DoctrineMigrations',
        'table_name' => 'doctrine_migration_versions'
    ),
    /*
    |--------------------------------------------------------------------------
    | Use to specify the default repository
    | http://docs.doctrine-project.org/en/2.1/reference/configuration.html item 3.7
    |--------------------------------------------------------------------------
    */

    'defaultRepository'            => '\Doctrine\ORM\EntityRepository',
    /*
    |--------------------------------------------------------------------------
    | Annotation Reader
    | https://github.com/doctrine/doctrine2/blob/master/lib/Doctrine/ORM/Tools/Setup.php
    |--------------------------------------------------------------------------
    */

    'use_simple_annotation_reader' => TRUE,
    /*
    |--------------------------------------------------------------------------
    | Use to specify the SQL Logger
    | http://docs.doctrine-project.org/en/2.1/reference/configuration.html item 3.2.6
    | To use with \Doctrine\DBAL\Logging\EchoSQLLogger, do:
    | 'sqlLogger' => new \Doctrine\DBAL\Logging\EchoSQLLogger();
    |--------------------------------------------------------------------------
    */
    'sqlLogger'                    => NULL,
);
