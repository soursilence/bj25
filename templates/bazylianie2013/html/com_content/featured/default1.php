<?php // no direct access
defined('_JEXEC') or die('Restricted access');
$data_dzis = date("Y-m-d")." 23:59:59";
//$this->item =& $this->getItem(0, $this->params);

//echo '<pre>';print_r($this->params);echo '</pre>';
//echo $this->loadTemplate('item');
//$this->item =& $this->getItem(1, $this->params);
?>
 <div class="top"><!-- start TOP class -->
	  
            </div><!-- end TOP class -->


<?php
$db = & JFactory::getDBO();	
$promonew_sql = "SELECT params from #__modules WHERE module = 'mod_promonew'";
$db->setQuery($promonew_sql);
$promonew = $db->loadRow();
$pozycja_promo_id=strpos($promonew[0],'idcont=')+7;
//echo $pozycja_promo_id2=strpos($promonew[0],' ',$pozycja_promo_id);

$id_promo = (int)substr($promonew[0],$pozycja_promo_id);

$tmp_data = 0;
//echo $this->loadTemplate('item');
$where = " WHERE state=1 AND (a.sectionid = 1 OR a.sectionid = 2) AND a.publish_up <= '$data_dzis' AND a.id!=$id_promo";
$orderby = " ORDER BY a.created desc limit 15";

		$query = ' SELECT a.id, a.title, a.alias, a.title_alias, a.introtext, a.fulltext, a.sectionid, a.state, a.catid, a.created, a.created_by, a.created_by_alias, a.modified, a.modified_by,' .
			' a.checked_out, a.checked_out_time, a.publish_up, a.publish_down, a.images, a.attribs, a.urls, a.metakey, a.metadesc, a.access,' .
			' (select count(*) from #__content_frontpage where content_id=a.id) as czy_fp, '.
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(\':\', a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
			' CHAR_LENGTH( a.`fulltext` ) AS readmore,' .
			' u.name AS author, u.usertype, g.name AS groups, u.email as author_email, cc.title AS category, s.title AS section, s.ordering AS s_ordering, cc.ordering AS cc_ordering, a.ordering AS a_ordering'.
			// ' , f.ordering AS f_ordering'.

			' FROM jos_content AS a' .
			//' INNER JOIN jos_content_frontpage AS f ON f.content_id = a.id' .
			' LEFT JOIN jos_categories AS cc ON cc.id = a.catid'.
			' LEFT JOIN jos_sections AS s ON s.id = a.sectionid'.
			' LEFT JOIN jos_users AS u ON u.id = a.created_by' .
			' LEFT JOIN jos_groups AS g ON a.access = g.id'.
			$where
			.$orderby
			;
$db->setQuery($query);
$aktu_a = $db->loadAssocList();
$tmp_data = 0;

foreach($aktu_a as $aktu){

?>	<div class="repeater"><!-- start REPEATER class -->
<?php if($tmp_data!=date("Y-m-d",strtotime($aktu['created']))){ $tmp_data=date("Y-m-d",strtotime($aktu['created'])); ?> <div class="stamp"><span><?php  echo date("Y-m-d",strtotime($aktu['created'])); ?></span></div><?php } ?>
              
			  
<div class="title<?php if($aktu['czy_fp']!=0) echo ' red';?>">
<a href="?option=com_content&view=article&id=<?php  echo $aktu['id']; ?>&catid=<?php  echo $aktu['a.catid']; ?>&Itemid=2" target="_self"><?php  echo $aktu['title']; ?></a>
              </div>

              
       	      
       	      <div class="text"> 
              <?php  echo $aktu['introtext']; ?>

                      
              </div>

          </div><!-- end REPEATER class -->                
              <?php
 
		}		
			
?>
           
            
               

       	                
          <div class="bottom">
          </div>
          <div class="sepaparate">
          </div>
      