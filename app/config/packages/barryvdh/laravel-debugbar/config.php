<?php

use Illuminate\Support\Facades\Config;

return array(

    /*
     |--------------------------------------------------------------------------
     | Debugbar Settings
     |--------------------------------------------------------------------------
     |
     | Debugbar is enabled by default, when debug is set to true in app.php.
     |
     */

    'enabled'         => Config::get('app.debug'),
    /*
     |--------------------------------------------------------------------------
     | Storage settings
     |--------------------------------------------------------------------------
     |
     | DebugBar stores data for session/ajax requests in a directory.
     | You can disable this, so the debugbar stores data in headers/session,
     | but this can cause problems with large data collectors.
     |
     */
    'storage'         => array(
        'enabled' => TRUE,
        'path'    => storage_path() . '/debugbar',
    ),
    /*
     |--------------------------------------------------------------------------
     | Vendors
     |--------------------------------------------------------------------------
     |
     | Vendor files are included by default, but can be set to false.
     | This can also be set to 'js' or 'css', to only include javascript or css vendor files.
     | Vendor files are for css: font-awesome (including fonts) and highlight.js (css files)
     | and for js: jquery and and highlight.js
     | So if you want syntax highlighting, set it to true. 
     | jQuery is set to not conflict with existing jQuery scripts.
     |
     */

    'include_vendors' => TRUE,
    /*
     |--------------------------------------------------------------------------
     | Capture Ajax Requests
     |--------------------------------------------------------------------------
     |
     | The Debugbar can capture Ajax requests and display them. If you don't want this (ie. because of errors),
     | you can use this option to disable sending the data through the headers.
     |
     */

    'capture_ajax'    => TRUE,
    /*
     |--------------------------------------------------------------------------
     | Capture Console Commands
     |--------------------------------------------------------------------------
     |
     | The Debugbar can listen to Artisan commands. You can view them with the browse button in the Debugbar.
     |
     */

    'capture_console' => FALSE,
    /*
     |--------------------------------------------------------------------------
     | DataCollectors
     |--------------------------------------------------------------------------
     |
     | Enable/disable DataCollectors
     |
     */

    'collectors'      => array(
        'phpinfo'         => TRUE, // Php version
        'messages'        => TRUE, // Messages
        'time'            => TRUE, // Time Datalogger
        'memory'          => TRUE, // Memory usage
        'exceptions'      => TRUE, // Exception displayer
        'log'             => TRUE, // Logs from Monolog (merged in messages if enabled)
        'db'              => FALSE, // Show database (PDO) queries and bindings
        'views'           => TRUE, // Views with their data
        'route'           => TRUE, // Current route information
        'laravel'         => FALSE, // Laravel version and environment
        'events'          => FALSE, // All events fired
        'default_request' => FALSE, // Regular or special Symfony request logger
        'symfony_request' => TRUE, // Only one can be enabled..
        'mail'            => TRUE, // Catch mail messages
        'logs'            => FALSE, // Add the latest log messages
        'files'           => FALSE, // Show the included files
        'config'          => FALSE, // Display config settings
        'auth'            => FALSE, // Display Laravel authentication status
    ),
    /*
     |--------------------------------------------------------------------------
     | Extra options
     |--------------------------------------------------------------------------
     |
     | Configure some DataCollectors
     |
     */

    'options'         => array(
        'auth'  => array(
            'show_name' => FALSE, // Also show the users name/email in the debugbar
        ),
        'db'    => array(
            'with_params' => TRUE, // Render SQL with the parameters substituted
            'timeline'    => FALSE, // Add the queries to the timeline
        ),
        'mail'  => array(
            'full_log' => FALSE
        ),
        'views' => array(
            'data' => FALSE, //Note: Can slow down the application, because the data can be quite large..
        ),
        'route' => array(
            'label' => TRUE // show complete route on bar
        ),
        'logs'  => array(
            'file' => NULL
        ),
    ),
    /*
     |--------------------------------------------------------------------------
     | Inject Debugbar in Response
     |--------------------------------------------------------------------------
     |
     | Usually, the debugbar is added just before <body>, by listening to the
     | Response after the App is done. If you disable this, you have to add them
     | in your template yourself. See http://phpdebugbar.com/docs/rendering.html
     |
     */

    'inject'          => TRUE,

);
