<?php
namespace Sagenda\SagendaCalendarTypo3\Controller;

/***
 *
 * This file is part of the "Sagenda Calendar Typo3" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Sagenda
 *
 ***/

/**
 * Sagendacalendartypo3Controller
 */
class Sagendacalendartypo3Controller extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * sagendacalendartypo3Repository
     *
     * @var \Sagenda\SagendaCalendarTypo3\Domain\Repository\Sagendacalendartypo3Repository
     * @inject
     */
    protected $sagendacalendartypo3Repository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $sagendacalendartypo3s = $this->sagendacalendartypo3Repository->findAll();
        $this->view->assign('sagendacalendartypo3s', $sagendacalendartypo3s);
    }
}
