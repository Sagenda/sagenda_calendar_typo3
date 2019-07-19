<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Sagenda.SagendaCalendarTypo3',
            'Sagendacalendartypo3',
            'Sagenda Calendar Typo3'
        );

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['sagendacalendartypo3_sagendacalendartypo3'] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('sagendacalendartypo3_sagendacalendartypo3', 'FILE:EXT:sagenda_calendar_typo3/Configuration/FlexForm/FlexForm.xml');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sagenda_calendar_typo3', 'Configuration/TypoScript', 'Sagenda Calendar Typo3');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sagendacalendartypo3_domain_model_sagendacalendartypo3', 'EXT:sagenda_calendar_typo3/Resources/Private/Language/locallang_csh_tx_sagendacalendar_domain_model_sagendacalendar.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sagendacalendartypo3_domain_model_sagendacalendartypo3');
    }
);
