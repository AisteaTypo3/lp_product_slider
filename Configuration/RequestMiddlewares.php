<?php

declare(strict_types=1);

return [
    'frontend' => [
        'aistea/lp-product-slider-endpoint' => [
            'target' => \Aistea\LpProductSlider\Middleware\SlideEndpointMiddleware::class,
            'after' => [
                'typo3/cms-frontend/page-resolver',
            ],
            'before' => [
                'typo3/cms-frontend/tsfe',
            ],
        ],
    ],
];
