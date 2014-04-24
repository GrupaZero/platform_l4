<?php
return [
    'multilang'    => [
        'enabled'   => TRUE,
        'detected'  => FALSE, // Do not change, changes in runtime!
        'subdomain' => FALSE
    ],
    'upload'       => [
        'path'   => public_path('uploads'),
        'public' => asset('uploads')
    ],
    'content_type' => [
        'content' => 'Gzero\Handlers\Content\Content'
    ]
];
