<?php
/*
* File: mod_nowosci.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php');

$men = modNowosciHelper::getSomething($params);

require_once( JModuleHelper::getLayoutPath('mod_nowosci'));

?>