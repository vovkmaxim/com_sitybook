<?php
/**
 * @version     1.0.0
 * @package     com_sitybooks
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      Maxim <mvovk90@mail.ru> - http://
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Category controller class.
 */
class SitybooksControllerCategory extends JControllerForm
{

    function __construct() {
        $this->view_list = 'categorys';
        parent::__construct();
    }

}