<?php
/*
* Plik: tmpl/default.php
*/
defined('_JEXEC') or die ('brak dostępu');
$menu_it = array();
$base_url = "http://".$_SERVER['HTTP_HOST'];
?><div id="<?php echo $params->get('menuid'); ?>"  class="jqueryslidemenu">
  <ul>
<?php
foreach ($men as $m)
{
$link = $m->link;
if((strpos($m->link, 'view=featured') !== false))
$link = $base_url; //JURI::base( true );
$menu_it[]= '<a href="'.$link.'" class="'.$params->get('prefixid').$m->id.'" title="'.$m->title.'">'.$m->title.'</a>';
}
$zap = "SELECT id,title FROM #__categories WHERE published=1 AND parent_id=80 ORDER BY lft";
$db =& JFactory::getDBO();
$r = null;
$db->setQuery($zap);
$r = $db->loadObjectList();
$menu_it[1].="\n<ul>\n";
$menu_it[1].='<li><a href="?option=com_content&view=category&layout=blog&id=80&Itemid=2&lang=uk">Всі</a></li>
';
foreach ($r as $rr)
{
$menu_it[1].='<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid=2&amp;id='.$rr->id.'">'.$rr->title.'</a></li>
';
}
$menu_it[1].='</ul>';

$zap = "SELECT id,title FROM #__categories WHERE published=1 AND parent_id=81 ORDER BY lft";
$db =& JFactory::getDBO();
$r = null;
$db->setQuery($zap);
$r = $db->loadObjectList();
$menu_it[2].="\n<ul>\n";
$menu_it[2].='<li><a href="?option=com_content&view=category&layout=blog&id=81&Itemid=3&lang=uk">Всі</a></li>
';
foreach ($r as $rr)
{
$menu_it[2].='<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid=3&amp;id='.$rr->id.'">'.$rr->title.'</a></li>
';
}
$menu_it[2].='</ul>';

/*O ZAKONIE*/
$zap = "SELECT id,title FROM #__categories WHERE published=1 AND parent_id=83 ORDER BY lft";
$db =& JFactory::getDBO();
$r = null;
$db->setQuery($zap);
$r = $db->loadObjectList();
$menu_it[3].="\n<ul>\n";
foreach ($r as $rr)
{
if($rr->id==36) $itid = 20;
else if($rr->id==39) $itid = 19;
else $itid = 4;

$menu_it[3].='<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid='.$itid.'&amp;id='.$rr->id.'">'.$rr->title.'</a></li>
';
}
$menu_it[3].='</ul>';
/*O ZAKONIE end*/

$zap = "SELECT id,title FROM #__categories WHERE published=1 AND parent_id=84 ORDER BY lft";
$db =& JFactory::getDBO();
$r = null;
$db->setQuery($zap);
$r = $db->loadObjectList();
$menu_it[6].="\n<ul>\n";
foreach ($r as $rr)
{
//$menu_it[6].='<li><a href="?view=category&amp;layout=blog&amp;option=com_content&amp;Itemid=7&amp;id='.$rr->id.'">'.$rr->title.'</a></li>
$menu_it[6].='<li><a href="?option=com_parafie&amp;k='.$rr->id.'&amp;Itemid=7">'.$rr->title.'</a></li>
';
}
$menu_it[6].='</ul>';

foreach($menu_it as $v){
?>
    <li><?php echo $v; ?></li>
  <?php
}
?>
  </ul>
</div>