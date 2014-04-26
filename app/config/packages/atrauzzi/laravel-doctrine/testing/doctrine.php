<?php
return array(

    'connection'    => array(
        'driver' => 'pdo_sqlite',
        'memory' => TRUE
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
    'metadata'      => array(
        __DIR__ . '/../../../../../../vendor/gzero/cms/src/Gzero/Entity',
        __DIR__ . '/../../../../../../app/models'
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
    'proxy_classes' => array(
        'auto_generate' => TRUE,
        'directory'     => NULL,
        'namespace'     => NULL,
    ),
);
