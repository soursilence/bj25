<?php
/*
* File: mod_mojaparafia.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php');

$dane = modMojaparafiaHelper::getSomething($params);

require_once( JModuleHelper::getLayoutPath('mod_mojaparafia'));

?>