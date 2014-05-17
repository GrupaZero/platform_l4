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
    'block_type'   => [
        'basic' => 'Gzero\Core\Handler\Block\Basic'
    ],
    'content_type' => [
        'content'  => 'Gzero\Handler\Content\Content',
        'category' => 'Gzero\Handler\Content\Category'
    ]
];
