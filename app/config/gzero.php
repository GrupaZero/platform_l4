<?php
return [
    'domain'       => 'dev.gzero.pl',
    'siteName'     => 'G-ZERO CMS',
    'multilang'    => [
        'enabled'   => true,
        'detected'  => false, // Do not change, changes in runtime!
        'subdomain' => false
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
