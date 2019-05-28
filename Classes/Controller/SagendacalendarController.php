<?php
namespace Sagenda\SagendaCalendar\Controller;

/***
 *
 * This file is part of the "Sagenda Calendar" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Sagenda, Sagenda
 *
 ***/

/**
 * SagendacalendarController
 */
class SagendacalendarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * sagendacalendarRepository
     *
     * @var \Sagenda\SagendaCalendar\Domain\Repository\SagendacalendarRepository
     * @inject
     */
    protected $sagendacalendarRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $sagendacalendars = $this->sagendacalendarRepository->findAll();
        $this->view->assign('sagendacalendars', $sagendacalendars);
    }
}
