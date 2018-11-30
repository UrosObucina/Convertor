<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Converter.DeepConverter',
            'Converter',
            'converter'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('deep_converter', 'Configuration/TypoScript', 'Deep Converter');

    }
);
