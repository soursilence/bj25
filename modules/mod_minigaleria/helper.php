<?php
/*
* File: helper.php
*/

defined('_JEXEC') or die ('Brak dostępu');

class modMinigaleriaHelper
{
	function getSomething($params)
	{
	  $db =& JFactory::getDBO();
	  $r = null;
	  $ile = (int)$params->get('ilepozycji');
	  $zdj = array();
	  $query = "SELECT cid,catpath FROM #__joomgallery_catg WHERE published=1
	  ORDER BY cid DESC LIMIT ".$ile;
	  $db->setQuery($query);
	  $res = $db->loadObjectList();
	  foreach($res as $r){
	    $query = "SELECT imgtitle,imgthumbname FROM #__joomgallery WHERE published=1 AND catid=".$r->cid." ORDER BY RAND() LIMIT 1";
	    $db->setQuery($query);
	    $zr = $db->loadObjectList();
	    foreach($zr as $z){
	      $zdj[$r->cid]['img'] = $z->imgthumbname;
	      $zdj[$r->cid]['tit'] = $z->imgtitle;
	      $zdj[$r->cid]['path'] = $r->catpath;
	      
	    }
	  }
	  return $zdj;
	}
}
?>