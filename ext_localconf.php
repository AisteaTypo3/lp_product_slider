<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function (): void {
    ExtensionManagementUtility::addTypoScript(
        'aistea_lp_product_slider',
        'setup',
        "@import 'EXT:aistea_lp_product_slider/Configuration/TypoScript/setup.typoscript'"
    );

    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['aisteaLpProductSliderSlides']
        = \Aistea\LpProductSlider\Eid\SlidesEid::class . '::main';
})();
