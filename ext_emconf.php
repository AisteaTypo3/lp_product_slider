<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title' => 'LP Product Slider',
    'description' => 'Landing page product slider / product viewer content element',
    'category' => 'plugin',
    'author' => 'Aistea',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.9.99',
            'fluid_styled_content' => '13.4.0-13.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
