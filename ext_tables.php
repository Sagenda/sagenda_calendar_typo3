<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Sagenda.SagendaCalendar',
            'Sagendacalendar',
            'Sagenda Calendar'
        );

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['sagendacalendar_sagendacalendar'] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('sagendacalendar_sagendacalendar', 'FILE:EXT:sagenda_calendar/Configuration/FlexForm/FlexForm.xml');
        
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sagenda_calendar', 'Configuration/TypoScript', 'Sagenda Calendar');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sagendacalendar_domain_model_sagendacalendar', 'EXT:sagenda_calendar/Resources/Private/Language/locallang_csh_tx_sagendacalendar_domain_model_sagendacalendar.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sagendacalendar_domain_model_sagendacalendar');

    }
);
