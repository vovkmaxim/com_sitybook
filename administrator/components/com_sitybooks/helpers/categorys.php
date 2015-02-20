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
require_once 'submenu.php';
/**
 * Sitybooks helper.
 */
class SitybooksHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        SitybooksSubmenuHelper::addSubmenu();
    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        return SitybooksSubmenuHelper::getActions();
    }
}
