<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Sagenda.SagendaCalendar',
            'Sagendacalendar',
            [
                'Sagendacalendar' => 'list'
            ],
            // non-cacheable actions
            [
                'Sagendacalendar' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    sagendacalendar {
                        iconIdentifier = sagenda_calendar-plugin-sagendacalendar
                        title = LLL:EXT:sagenda_calendar/Resources/Private/Language/locallang_db.xlf:tx_sagenda_calendar_sagendacalendar.name
                        description = LLL:EXT:sagenda_calendar/Resources/Private/Language/locallang_db.xlf:tx_sagenda_calendar_sagendacalendar.description
                        tt_content_defValues {
                            CType = list
                            list_type = sagendacalendar_sagendacalendar
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'sagenda_calendar-plugin-sagendacalendar',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:sagenda_calendar/Resources/Public/Icons/user_plugin_sagendacalendar.svg']
			);
		
    }
);
