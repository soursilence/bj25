<?php
//http://bazylianie.pl/?option=com_parafie&p=3&k=41
$limit = 5;

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$db = & JFactory::getDBO();













$idp=0;
if(isset($_GET['p'])) $idp = (int)$_GET['p'];

if($idp>0){

$where = " WHERE a.id = $idp";
//$orderby = " ORDER BY a.publish_up desc ";
$orderby = " ORDER BY a.ordering desc ";
	/*$query = ' SELECT a.id, a.title, a.alias, a.title_alias, a.introtext, a.fulltext, a.sectionid, a.state, a.catid, a.created, a.created_by, a.created_by_alias, a.modified, a.modified_by,' .
			' a.checked_out, a.checked_out_time, a.publish_up, a.publish_down, a.images, a.attribs, a.urls, a.metakey, a.metadesc, a.access,' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(\':\', a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
			' CHAR_LENGTH( a.`fulltext` ) AS readmore,' .
			' u.name AS author, u.usertype, g.name AS groups, u.email as author_email, cc.title AS category, s.title AS section, s.ordering AS s_ordering, cc.ordering AS cc_ordering, a.ordering AS a_ordering'.

			' FROM jos_content AS a' .
			//' INNER JOIN jos_content_frontpage AS f ON f.content_id = a.id' .
			' LEFT JOIN jos_categories AS cc ON cc.id = a.catid'.
			' LEFT JOIN jos_sections AS s ON s.id = a.sectionid'.
			' LEFT JOIN jos_users AS u ON u.id = a.created_by' .
			' LEFT JOIN jos_groups AS g ON a.access = g.id'.
			$where
			.$orderby
			;*/
			

		$query = ' SELECT a.*,' .
			' (select count(*) from #__content_frontpage where content_id=a.id) as czy_fp, '.
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(\':\', a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
			' CHAR_LENGTH( a.`fulltext` ) AS readmore,' .
			' u.name AS author, '.
//			g.name AS groups,
' u.email as author_email, cc.title AS category, 
			cc.lft AS cc_ordering, a.ordering AS a_ordering'.
			// ' , f.ordering AS f_ordering'.

			' FROM #__content AS a' .
			//' INNER JOIN #__content_frontpage AS f ON f.content_id = a.id' .
			' LEFT JOIN #__categories AS cc ON cc.id = a.catid'.
//			' LEFT JOIN #__sections AS s ON s.id = a.sectionid'.
			' LEFT JOIN #__users AS u ON u.id = a.created_by' .
//			' LEFT JOIN #__groups AS g ON a.access = g.id'.
			$where
			.$orderby
			;

	
			
$db->setQuery($query);

//$aktu = $db->loadAssoc();
//print_r($aktu);
while ($aktu = $db->loadAssoc()){
?>

<div>
          <div class="topalt">
	      	
          </div>
<div class="repeater2"><!-- start REPEATER class -->
       	      <div class="title">
       	      <a href="?option=com_content&view=article&id=<?php  echo $aktu['id']; ?>&catid=<?php  echo $aktu['a.catid']; ?>&Itemid=7">
              	<?php echo $aktu['title']; ?></a>
              </div>
       	      <div class="stamp">
              	<span><?php echo JHTML::_('date', $aktu['created'], JText::_('DATE_FORMAT_LC2')); ?></span>
              </div>
              
 <div class="text"> 
 <?php  echo $aktu['introtext']; ?>

</div>


  <div class="more">
      <div id="more_yellow">
        <a href="?option=com_content&view=article&id=<?php  echo $aktu['id']; ?>&catid=<?php  echo $aktu['a.catid']; ?>&Itemid=7" target="_self"></a>
      </div>
    
              </div>
          </div><!-- end REPEATER class -->
	  </div>            
          <div class="bottom">
          </div>

          <div class="sepaparate">
          </div>
         
<?php


}
}
?>



<?php
$idk=0;
if(isset($_GET['k'])) $idk = (int)$_GET['k'];

if($idk>0){
if($limit !=0)
$where = " WHERE a.catid = $idk and a.state=1";
//$orderby = " ORDER BY a.mask desc, a.publish_up desc ";
$orderby = " ORDER BY a.ordering asc ";
if($limit!=0) $orderby .= " Limit $limit ";
		/*$query = ' SELECT a.id, a.title, a.alias, a.title_alias, a.introtext, a.fulltext, a.sectionid, a.state, a.catid, a.created, a.created_by, a.created_by_alias, a.modified, a.modified_by,' .
			' a.checked_out, a.checked_out_time, a.publish_up, a.publish_down, a.images, a.attribs, a.urls, a.metakey, a.metadesc, a.access,' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(\':\', a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
			' CHAR_LENGTH( a.`fulltext` ) AS readmore,' .
			' u.name AS author, u.usertype, g.name AS groups, u.email as author_email, cc.title AS category, s.title AS section, s.ordering AS s_ordering, cc.ordering AS cc_ordering, a.ordering AS a_ordering'.

			' FROM jos_content AS a' .
			//' INNER JOIN jos_content_frontpage AS f ON f.content_id = a.id' .
			' LEFT JOIN jos_categories AS cc ON cc.id = a.catid'.
			' LEFT JOIN jos_sections AS s ON s.id = a.sectionid'.
			' LEFT JOIN jos_users AS u ON u.id = a.created_by' .
			' LEFT JOIN jos_groups AS g ON a.access = g.id'.
			$where
			.$orderby
			;*/


		$query = ' SELECT a.*,' .
			' (select count(*) from #__content_frontpage where content_id=a.id) as czy_fp, '.
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(\':\', a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
			' CHAR_LENGTH( a.`fulltext` ) AS readmore,' .
			' u.name AS author,'.
//			g.name AS groups,
' u.email as author_email, cc.title AS category, 
			cc.lft AS cc_ordering, a.ordering AS a_ordering'.
			// ' , f.ordering AS f_ordering'.

			' FROM #__content AS a' .
			//' INNER JOIN #__content_frontpage AS f ON f.content_id = a.id' .
			' LEFT JOIN #__categories AS cc ON cc.id = a.catid'.
//			' LEFT JOIN #__sections AS s ON s.id = a.sectionid'.
			' LEFT JOIN #__users AS u ON u.id = a.created_by' .
//			' LEFT JOIN #__groups AS g ON a.access = g.id'.
			$where
			.$orderby
			;
		

$db->setQuery($query);

//$aktu = $db->loadAssoc();
//print_r($aktu);
$list = $db->loadAssocList();
foreach ($list as $aktu){
?>


        
<div class="repeater2"><!-- start REPEATER class -->
       	      <div class="title">
       	      <a href="?option=com_content&view=article&id=<?php  echo $aktu['id']; ?>&catid=<?php  echo $aktu['a.catid']; ?>&Itemid=7">
              	<?php echo $aktu['title']; ?></a>
              </div>
       	      <div class="stamp">
              	<span><?php echo JHTML::_('date', $aktu['created'], JText::_('DATE_FORMAT_LC2')); ?></span>
              </div>
              
 <div class="text"> 
 <?php  echo $aktu['introtext']; ?>

</div>


  <div class="more">
      <div id="more_yellow">
        <a href="?option=com_content&view=article&id=<?php  echo $aktu['id']; ?>&catid=<?php  echo $aktu['catid']; ?>&Itemid=7" target="_self"></a>
      </div>
    
              </div>
          </div><!-- end REPEATER class -->            
          <div class="bottom">
          </div>

          <div class="sepaparate">
          </div>
<?php


}
}
?>

