<?php
return [
    'backend' => [
        'frontName' => 'admin_23bg4o'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'iljnSDpgg2o53BReNDT3Xg3LC3bWIViP'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '6ad_'
            ],
            'page_cache' => [
                'id_prefix' => '6ad_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '7c30eab34041c970addeb29c3fce1bb8'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'userstories',
                'username' => 'userstories',
                'password' => 'Harit1273#',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'us.mage2.com'
    ],
    'install' => [
        'date' => 'Tue, 07 Nov 2023 13:33:54 +0000'
    ]
];
