<?php
/*
* File: mod_minigaleria.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DS.'helper.php');

$res = modMinigaleriaHelper::getSomething($params);

require_once( JModuleHelper::getLayoutPath('mod_minigaleria'));

?>