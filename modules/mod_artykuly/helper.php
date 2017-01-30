<?php
/*
* File: helper.php
*/

defined('_JEXEC') or die ('Brak dostępu');

class modArtykulyHelper
{
	function getSomething($params)
	{
	  $db =& JFactory::getDBO();
	  $r = null;
	  $ile = (int)$params->get('ilepozycji');
	  $kat = (int)$params->get('idkat');

	  
	  $data_dzis = date("Y-m-d")." 23:59:59";
	  $query = "SELECT title,id,created,catid FROM #__content WHERE state=1 AND publish_up <= '$data_dzis' AND catid in (select id from #__categories where parent_id= $kat) ORDER BY created DESC LIMIT ".$ile;
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	  return $r;
	}
}
?>