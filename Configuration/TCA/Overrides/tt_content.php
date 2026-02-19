<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function (): void {
    $contentType = 'aistea_lp_product_slider';
    $horizontalContentType = 'aistea_lp_horizontal_slider';
    $imageSequenceContentType = 'aistea_lp_image_sequence';
    $fullScreenVideoContentType = 'aistea_lp_fullscreen_video';

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
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.aistea_lp_fullscreen_video',
            'value' => $fullScreenVideoContentType,
            'icon' => 'aistea-lp-fullscreen-video-ce',
            'group' => 'common',
        ]
    );
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.aistea_lp_horizontal_slider',
            'value' => $horizontalContentType,
            'icon' => 'aistea-lp-horizontal-slider-ce',
            'group' => 'common',
        ]
    );
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.aistea_lp_image_sequence',
            'value' => $imageSequenceContentType,
            'icon' => 'aistea-lp-image-sequence-ce',
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
        'tx_aistealpproductslider_hslides' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_hslides',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_aistealpproductslider_hslide',
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
        'tx_aistealpproductslider_sequence_frames' => [
            'exclude' => true,
            'displayCond' => 'FIELD:tx_aistealpproductslider_sequence_source:=:filelist',
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_sequence_frames',
            'config' => [
                'type' => 'file',
                'allowed' => 'jpg,jpeg,png,webp,avif',
                'maxitems' => 300,
                'minitems' => 1,
            ],
        ],
        'tx_aistealpproductslider_sequence_source' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_sequence_source',
            'onChange' => 'reload',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'filelist',
                'items' => [
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:sequence_source.filelist', 'filelist'],
                    ['LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:sequence_source.collection', 'collection'],
                ],
            ],
        ],
        'tx_aistealpproductslider_sequence_collection' => [
            'exclude' => true,
            'displayCond' => 'FIELD:tx_aistealpproductslider_sequence_source:=:collection',
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_sequence_collection',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'sys_file_collection',
                'foreign_table_where' => ' AND {#sys_file_collection}.{#deleted}=0',
                'default' => 0,
            ],
        ],
        'tx_aistealpproductslider_sequence_fps' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_sequence_fps',
            'config' => [
                'type' => 'number',
                'format' => 'integer',
                'default' => 12,
                'range' => [
                    'lower' => 1,
                    'upper' => 60,
                ],
            ],
        ],
        'tx_aistealpproductslider_sequence_loop' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_sequence_loop',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'tx_aistealpproductslider_fsv_short_video' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_fsv_short_video',
            'config' => [
                'type' => 'file',
                'allowed' => 'mp4',
                'maxitems' => 1,
                'minitems' => 1,
            ],
        ],
        'tx_aistealpproductslider_fsv_long_video' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_fsv_long_video',
            'config' => [
                'type' => 'file',
                'allowed' => 'vimeo',
                'maxitems' => 1,
                'minitems' => 0,
            ],
        ],
        'tx_aistealpproductslider_fsv_kicker' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_fsv_kicker',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
            ],
        ],
        'tx_aistealpproductslider_fsv_headline' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_fsv_headline',
            'config' => [
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim',
            ],
        ],
        'tx_aistealpproductslider_fsv_button_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_aistealpproductslider_fsv_button_label',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
                'default' => 'Watch full video',
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

    $horizontalShowItem = '
        --palette--;;general,
        header,
        --div--;LLL:EXT:aistea_lp_product_slider/Resources/Private/Language/locallang_db.xlf:tabs.slides,
        tx_aistealpproductslider_hslides,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription
    ';

    $GLOBALS['TCA']['tt_content']['types'][$horizontalContentType] = [
        'showitem' => $horizontalShowItem,
        'columnsOverrides' => [
            'header' => [
                'config' => [
                    'placeholder' => 'Product Story',
                ],
            ],
        ],
    ];

    $imageSequenceShowItem = '
        --palette--;;general,
        header,
        tx_aistealpproductslider_sequence_source,
        tx_aistealpproductslider_sequence_collection,
        tx_aistealpproductslider_sequence_frames,
        tx_aistealpproductslider_sequence_fps,
        tx_aistealpproductslider_sequence_loop,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription
    ';

    $GLOBALS['TCA']['tt_content']['types'][$imageSequenceContentType] = [
        'showitem' => $imageSequenceShowItem,
        'columnsOverrides' => [
            'header' => [
                'config' => [
                    'placeholder' => 'Image Sequence',
                ],
            ],
        ],
    ];

    $fullScreenVideoShowItem = '
        --palette--;;general,
        header,
        tx_aistealpproductslider_fsv_short_video,
        tx_aistealpproductslider_fsv_long_video,
        tx_aistealpproductslider_fsv_kicker,
        tx_aistealpproductslider_fsv_headline,
        tx_aistealpproductslider_fsv_button_label,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription
    ';

    $GLOBALS['TCA']['tt_content']['types'][$fullScreenVideoContentType] = [
        'showitem' => $fullScreenVideoShowItem,
        'columnsOverrides' => [
            'header' => [
                'config' => [
                    'placeholder' => 'Immersive video block',
                ],
            ],
        ],
    ];
})();
