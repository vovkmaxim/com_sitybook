<?php
/**
 * @version     1.0.0
 * @package     com_sitybooks
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      Maxim <mvovk90@mail.ru> - http://
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Categorys list controller class.
 */
class SitybooksControllerCategorys extends SitybooksController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Categorys', $prefix = 'SitybooksModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}