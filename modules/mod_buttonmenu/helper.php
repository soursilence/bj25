<?php
/*
* File: helper.php
*/

defined('_JEXEC') or die ('go away stranger');

class modButtonmenuHelper
{

	function getMenu($params)
	{
	  $db =& JFactory::getDBO();
	  $r = null;
	  $query = "SELECT id,title,link FROM #__menu WHERE menutype = 'buttons_menu' AND published=1 ORDER BY lft";
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	  return $r;
	}

}

?>