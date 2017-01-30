<?php
/*
* File: helper.php
*/

defined('_JEXEC') or die ('Brak dostępu');

class modMojaparafiaHelper
{
	function getSomething($params)
	{
	  $db =& JFactory::getDBO();
	  $r = null;
	  $ra = null;
	  $dane = array();
	  $mp = 44;
	  if (isset($_COOKIE['mojaparafia'])){
	    $mp = (int)$_COOKIE['mojaparafia'];
	  }
	  $mp = JRequest::getVar('setmp', $mp);
            setcookie("mojaparafia", $mp, mktime(23,59,59,date("m"),date("d"),date("Y")+10));

	  $kat = 84;
	  
	  $query = "SELECT title,id FROM #__categories WHERE parent_id=$kat AND published = 1 ORDER BY lft ";
	  $db->setQuery($query);
	  $r = $db->loadObjectList();
	  foreach ($r as $m)
	  {
	    $dane['m'][$m->id]= $m->title;
	    //$querya = "SELECT title,id FROM #__content WHERE catid=".$mp." and state = 1 ORDER BY mask asc, publish_up desc limit 3";
	    $querya = "SELECT title,id FROM #__content WHERE catid=".$mp." and state = 1 and publish_up<= '".date('Y-m-d h:i:s')."' ORDER BY  publish_up desc limit 3";
	    $db->setQuery($querya);
	    $ra = $db->loadObjectList();
	    foreach ($ra as $ma)
	    {
	      $dane['a'][$ma->id]= $ma->title;

	    }

	  }
	  
	  $dane['mojaparafia'] = $mp;
	  return $dane;
	}
}
?>