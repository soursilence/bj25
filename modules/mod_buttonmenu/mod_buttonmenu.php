<?php
/*
* File: mod_buttonmenu.php
*/

defined('_JEXEC') or die ('Direct Access is forbidden, shame on you');

require_once( dirname(__FILE__).DS.'helper.php');

$men = modButtonmenuHelper::getMenu($params);

require_once( JModuleHelper::getLayoutPath('mod_buttonmenu'));

?>