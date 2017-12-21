<?php
/*
 * Plik: tmpl/default.php
 */
defined('_JEXEC') or die('brak dostępu');
$menu_it = array();
$base_url = "http://" . $_SERVER['HTTP_HOST'];
?><div id="<?php //echo $params->get('menuid'); ?>"  >
      <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <ul id="myNavbar" class="nav navbar-nav collapse navbar-collapse">
        <?php
        $i=0;
        foreach ($men as $m) {
            $link = $m->link;
            if ((strpos($m->link, 'view=featured') !== false)){
                $link = $base_url; //JURI::base( true );
            }
            if($i ==1 || $i== 2|| $i== 3 || $i== 6){
                $menu_it[$i] = '<a href="#" data-toggle="dropdown">' . $m->title . '<span class="caret"></span></a>';
            }
            else{
            $menu_it[$i] = '<a href="' . $link . '" class="' . $params->get('prefixid') . $m->id . '" title="' . $m->title . '">' . $m->title . '</a>';
            }
            $i++;
        }

        $menu_it[1] .= "\n<ul class='nav-child unstyled small dropdown-menu'>\n";
        $menu_it[1] .= '<li><a href="?option=com_content&view=category&layout=blog&id=80&Itemid=2&lang=uk">Всі</a></li>
';
        foreach ($cat1 as $rr) {
            $menu_it[1] .= '<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid=2&amp;id=' . $rr->id . '">' . $rr->title . '</a></li>
';
        }
        $menu_it[1] .= '</ul>';


        $menu_it[2] .= "\n<ul class='nav-child unstyled small dropdown-menu'>\n";
        $menu_it[2] .= '<li><a href="?option=com_content&view=category&layout=blog&id=81&Itemid=3&lang=uk">Всі</a></li>
';
        foreach ($cat2 as $rr) {
            $menu_it[2] .= '<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid=3&amp;id=' . $rr->id . '">' . $rr->title . '</a></li>
';
        }
        $menu_it[2] .= '</ul>';

        /* O ZAKONIE */
        
        $menu_it[3] .= "\n<ul class='nav-child unstyled small dropdown-menu'>\n";
        foreach ($cat3 as $rr) {
            if ($rr->id == 36)
                $itid = 20;
            else if ($rr->id == 39)
                $itid = 19;
            else
                $itid = 4;

            $menu_it[3] .= '<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid=' . $itid . '&amp;id=' . $rr->id . '">' . $rr->title . '</a></li>
';
        }
        $menu_it[3] .= '</ul>';
        /* O ZAKONIE end */

        $menu_it[6] .= "\n<ul class='nav-child unstyled small dropdown-menu'>\n";
        foreach ($cat4 as $rr) {
//$menu_it[6].='<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid=7&amp;id='.$rr->id.'">'.$rr->title.'</a></li>
            $menu_it[6] .= '<li><a href="?option=com_parafie&amp;k=' . $rr->id . '&amp;Itemid=7">' . $rr->title . '</a></li>
';
        }
        $menu_it[6] .= '</ul>';

        foreach ($menu_it as $v) {
            ?>
            <li><?php echo $v; ?></li>
            <?php
        }
        ?>
    </ul>
</div>