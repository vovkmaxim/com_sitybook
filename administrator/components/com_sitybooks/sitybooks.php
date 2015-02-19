<?php
/**
 * @version     1.0.0
 * @package     com_sitybooks
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      Maxim <mvovk90@mail.ru> - http://
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_sitybooks'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('Sitybooks');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
