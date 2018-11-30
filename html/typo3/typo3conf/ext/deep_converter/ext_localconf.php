<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Converter.DeepConverter',
            'Converter',
            [
                'Mass' => 'convert'
            ],
            // non-cacheable actions
            [
                
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    converter {
                        iconIdentifier = deep_converter-plugin-converter
                        title = LLL:EXT:deep_converter/Resources/Private/Language/locallang_db.xlf:tx_deep_converter_converter.name
                        description = LLL:EXT:deep_converter/Resources/Private/Language/locallang_db.xlf:tx_deep_converter_converter.description
                        tt_content_defValues {
                            CType = list
                            list_type = deepconverter_converter
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'deep_converter-plugin-converter',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:deep_converter/Resources/Public/Icons/user_plugin_converter.svg']
			);
		
    }
);
