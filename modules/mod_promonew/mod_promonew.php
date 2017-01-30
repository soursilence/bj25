<?php
/*
* File: mod_promo.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php');

$res = modPromonewHelper::getSomething($params);

require_once( JModuleHelper::getLayoutPath('mod_promonew'));

?>