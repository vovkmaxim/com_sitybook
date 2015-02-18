<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class SitybookControllersIndex extends SitybookControllersDefault
{
    function execute()
    {
        die('22222222222222222222222222');
        $app = JFactory::getApplication();
        $viewName = $app->input->get('view');
        $app->input->set('layout','edit');
        $app->input->set('view', $viewName);
        //display view
        return parent::execute();
    }
}
