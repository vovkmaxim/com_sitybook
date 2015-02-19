<?php
/**
 * @version     1.0.0
 * @package     com_sitybooks
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      Maxim <mvovk90@mail.ru> - http://
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Sitybooks');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
