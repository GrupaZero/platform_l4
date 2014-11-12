<?php

return [
    ## !!! SET $secure TO True IN PRODUCTION !!!
    'secure'       => FALSE,
    # system credentials
    'user'         => 'demo',
    'password'     => 'DiershOp0',
    'api_key'      => NULL,
    # end-point configuration
    'server'       => 'https://a.billin.pl',
    'prefix'       => '/demo-6f92/API/',
    'system'       => 'prod',
    'api_version'  => 'v1',
    # PCP configuration
    'pcp'          => 'https://localhost:9080/',
    ## !!! CHANGE THIS IN PRODUCTION !!!
    'pcp_user'     => 'test',
    'pcp_pass'     => 'test',
    # logging
    'debug'        => FALSE,
    'console_log'  => TRUE,
    'log_facility' => LOG_LOCAL0,
    'log_process'  => "billin"
];
