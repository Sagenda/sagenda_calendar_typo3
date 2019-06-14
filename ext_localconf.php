<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Sagenda.SagendaCalendarTypo3',
            'Sagendacalendartypo3',
            [
                'Sagendacalendartypo3' => 'list'
            ],
            // non-cacheable actions
            [
                'Sagendacalendartypo3' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    sagendacalendartypo3 {
                        iconIdentifier = sagenda_calendar-plugin-sagendacalendar
                        title = LLL:EXT:sagenda_calendar_typo3/Resources/Private/Language/locallang_db.xlf:tx_sagenda_calendar_sagendacalendar.name
                        description = LLL:EXT:sagenda_calendar_typo3/Resources/Private/Language/locallang_db.xlf:tx_sagenda_calendar_sagendacalendar.description
                        tt_content_defValues {
                            CType = list
                            list_type = sagendacalendartypo3_sagendacalendartypo3
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
				['source' => 'EXT:sagenda_calendar_typo3/Resources/Public/Icons/sagenda_vector.svg']
			);
		
    }
);
