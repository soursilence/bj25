<?php
/*
* File: mod_nowosci.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DS.'helper.php');

$men = modArtykulyHelper::getSomething($params);

require_once( JModuleHelper::getLayoutPath('mod_artykuly'));

?>