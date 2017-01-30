<?php
/*
* File: mod_mainmenucssimage.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DS.'helper.php');

$men = modMainmenucssimageHelper::getMenu($params);

require_once( JModuleHelper::getLayoutPath('mod_mainmenucssimage'));

?>