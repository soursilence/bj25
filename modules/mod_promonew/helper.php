<?php
/*
* File: helper.php
*/

defined('_JEXEC') or die ('Brak dostępu');

class modPromonewHelper
{
	function getSomething($params)
	{
	  $db =& JFactory::getDBO();
	  $r = null;
	  $id = (int)$params->get('idcont');
	  
	  $query = "SELECT title,id FROM #__content WHERE id=$id";
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	  return $r;
	}
}
?>