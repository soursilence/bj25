<?php
/*
* File: mod_promo.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DS.'helper.php');

$res = modPromonewHelper::getSomething($params);

require_once( JModuleHelper::getLayoutPath('mod_promonew'));

?>