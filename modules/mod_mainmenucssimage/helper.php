<?php

/*
 * File: helper.php
 */

defined('_JEXEC') or die('go away stranger');

class modMainmenucssimageHelper {

    function getMenu($params) {
        $db = & JFactory::getDBO();
        $r = null;
        $query = "SELECT id,title,link FROM #__menu WHERE menutype = 'mainmenu' AND published=1  ORDER BY lft";
        $db->setQuery($query);
        $r = $db->loadObjectList();
        return $r;
    }

    function getCategories($parent_id) {

        $zap = "SELECT id,title FROM #__categories WHERE published=1 AND parent_id=$parent_id ORDER BY lft";
        $db = & JFactory::getDBO();
        $r = null;
        $db->setQuery($zap);
        $r = $db->loadObjectList();

        return $r;
    }

}

?>