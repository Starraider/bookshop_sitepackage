<?php

/**
 * Extension Manager/Repository config file for ext "bookshop_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bookshop Sitepackage',
    'description' => 'TYPO3-Sitepackage for Bookshops',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Skom\\BookshopSitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'version' => '1.0.0',
];
