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
        'basic' => 'Gzero\Core\Handler\Block\Basic',
        'menu'  => 'Gzero\Core\Handler\Block\Menu'
    ],
    'content_type' => [
        'content'  => 'Gzero\Core\Handler\Content\Content',
        'category' => 'Gzero\Core\Handler\Content\Category'
    ]
];
