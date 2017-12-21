<?php
/*
* File: mod_mainmenucssimage.php
*/

defined('_JEXEC') or die ('Brak dostępu');

require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php');

$men = modMainmenucssimageHelper::getMenu($params);
$cat1 = modMainmenucssimageHelper::getCategories(80);
$cat2 = modMainmenucssimageHelper::getCategories(81);
$cat3 = modMainmenucssimageHelper::getCategories(83); //O ZAKONIE
$cat4 = modMainmenucssimageHelper::getCategories(84);


require_once( JModuleHelper::getLayoutPath('mod_mainmenucssimage'));

?>