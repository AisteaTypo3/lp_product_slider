<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function (): void {
    $contentType = 'aistea_lp_product_slider';

    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.aistea_lp_product_slider',
            'value' => $contentType,
            'icon' => 'aistea-lp-product-slider-ce',
            'group' => 'common',
        ]
    );

    $newColumns = [
        'tx_aistealpproductslider_layout_mode' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_layout_mode',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'default',
                'items' => [
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:layout_mode.default', 'default'],
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:layout_mode.compact', 'compact'],
                ],
            ],
        ],
        'tx_aistealpproductslider_breakpoint_mobile' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_breakpoint_mobile',
            'config' => [
                'type' => 'number',
                'format' => 'integer',
                'default' => 768,
                'range' => [
                    'lower' => 320,
                    'upper' => 1920,
                ],
            ],
        ],
        'tx_aistealpproductslider_reduced_motion_behavior' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_reduced_motion_behavior',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'static',
                'items' => [
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:reduced_motion.static', 'static'],
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:reduced_motion.allow_manual', 'allowManualPlay'],
                ],
            ],
        ],
        'tx_aistealpproductslider_video_autoplay_desktop' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_video_autoplay_desktop',
            'config' => [
                'type' => 'check',
                'default' => 1,
            ],
        ],
        'tx_aistealpproductslider_video_autoplay_mobile' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_video_autoplay_mobile',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'tx_aistealpproductslider_preload_strategy' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_preload_strategy',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'smart',
                'items' => [
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:preload.none', 'none'],
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:preload.smart', 'smart'],
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:preload.aggressive', 'aggressive'],
                ],
            ],
        ],
        'tx_aistealpproductslider_stage_aspect_ratio' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_stage_aspect_ratio',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'default' => '1/1',
                'eval' => 'trim',
                'placeholder' => '16/9',
            ],
        ],
        'tx_aistealpproductslider_theme' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_theme',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'dark',
                'items' => [
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:theme.dark', 'dark'],
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:theme.light', 'light'],
                ],
            ],
        ],
        'tx_aistealpproductslider_slides' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_slides',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_aistealpproductslider_slide',
                'foreign_field' => 'parentid',
                'foreign_table_field' => 'parenttable',
                'foreign_sortby' => 'sorting',
                'appearance' => [
                    'expandSingle' => true,
                    'useSortable' => true,
                    'enabledControls' => [
                        'info' => true,
                        'new' => true,
                        'dragdrop' => true,
                        'sort' => true,
                        'hide' => true,
                        'delete' => true,
                        'localize' => true,
                    ],
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'minitems' => 0,
            ],
        ],
    ];

    ExtensionManagementUtility::addTCAcolumns('tt_content', $newColumns);

    $showItem = '
        --palette--;;general,
        header,
        tx_aistealpproductslider_layout_mode,
        tx_aistealpproductslider_theme,
        tx_aistealpproductslider_stage_aspect_ratio,
        tx_aistealpproductslider_breakpoint_mobile,
        tx_aistealpproductslider_reduced_motion_behavior,
        tx_aistealpproductslider_video_autoplay_desktop,
        tx_aistealpproductslider_video_autoplay_mobile,
        tx_aistealpproductslider_preload_strategy,
        --div--;LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tabs.slides,
        tx_aistealpproductslider_slides,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription
    ';

    $GLOBALS['TCA']['tt_content']['types'][$contentType] = [
        'showitem' => $showItem,
        'columnsOverrides' => [
            'header' => [
                'config' => [
                    'placeholder' => 'Product Viewer',
                ],
            ],
        ],
    ];
})();
