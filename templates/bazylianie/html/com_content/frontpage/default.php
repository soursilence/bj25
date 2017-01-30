<?php // no direct access
defined('_JEXEC') or die('Restricted access');
$data_dzis = date("Y-m-d")." 23:59:59";
//$this->item =& $this->getItem(0, $this->params);

//echo '<pre>';print_r($this->params);echo '</pre>';
//echo $this->loadTemplate('item');
//$this->item =& $this->getItem(1, $this->params);
?>
 <div class="top"><!-- start TOP class -->
	      	<span>Останні новини</span>
            <a href="index.php?option=com_content&view=section&layout=blog&id=1&Itemid=3" target="_self">
            	Інші новини &gt;&gt;
            </a>
            </div><!-- end TOP class -->

<?php

//echo $this->loadTemplate('item');
$where = " WHERE state=1 AND a.sectionid = 1 AND a.publish_up <= '$data_dzis'";
$orderby = " ORDER BY a.created desc limit 1";
$db = & JFactory::getDBO();
		$query = ' SELECT a.id, a.title, a.alias, a.title_alias, a.introtext, a.fulltext, a.sectionid, a.state, a.catid, a.created, a.created_by, a.created_by_alias, a.modified, a.modified_by,' .
			' a.checked_out, a.checked_out_time, a.publish_up, a.publish_down, a.images, a.attribs, a.urls, a.metakey, a.metadesc, a.access,' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(\':\', a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
			' CHAR_LENGTH( a.`fulltext` ) AS readmore,' .
			' u.name AS author, u.usertype, g.name AS groups, u.email as author_email, cc.title AS category, s.title AS section, s.ordering AS s_ordering, cc.ordering AS cc_ordering, a.ordering AS a_ordering, f.ordering AS f_ordering'.

			' FROM jos_content AS a' .
			' INNER JOIN jos_content_frontpage AS f ON f.content_id = a.id' .
			' LEFT JOIN jos_categories AS cc ON cc.id = a.catid'.
			' LEFT JOIN jos_sections AS s ON s.id = a.sectionid'.
			' LEFT JOIN jos_users AS u ON u.id = a.created_by' .
			' LEFT JOIN jos_groups AS g ON a.access = g.id'.
			$where
			.$orderby
			;
$db->setQuery($query);

$aktu = $db->loadAssoc();

?>	<div class="repeater"><!-- start REPEATER class -->
<div class="title">
<?php  echo $aktu['title']; ?>
              </div>
<div class="stamp">
              	<?php  echo $aktu['created']; ?>
              </div>
              <div class="author">
              <?php  echo $aktu['created_by_alias']; ?>
              </div>
              
       	      
       	      <div class="text"> 
              <?php  echo $aktu['introtext']; ?>
<div class="more2">
  <div id="more_yellow">
	                        <a href="?option=com_content&view=article&id=<?php  echo $aktu['id']; ?>&catid=<?php  echo $aktu['a.catid']; ?>&Itemid=2" target="_self">
    	                    </a>
        				</div>
 <div id="more_comments"></div>                       
                    </div>
                      
              </div>

          </div><!-- end REPEATER class -->                
              <?php
 
				
			
?>
           
            
               

       	                
          <div class="bottom">
          </div>
          <div class="sepaparate">
          </div>
          <div class="top">
	      	<span>Останні статті</span>
            <a href="index.php?option=com_content&view=section&layout=blog&id=2&Itemid=3" target="_self">
            	Інші статті &gt;&gt;
            </a>
          </div>
<?php

//echo $this->loadTemplate('item');
$where = " WHERE state=1 AND a.sectionid = 2 AND a.publish_up <= '$data_dzis'";
$orderby = " ORDER BY a.created desc limit 1";
$db = & JFactory::getDBO();
		$query = ' SELECT a.id, a.title, a.alias, a.title_alias, a.introtext, a.fulltext, a.sectionid, a.state, a.catid, a.created, a.created_by, a.created_by_alias, a.modified, a.modified_by,' .
			' a.checked_out, a.checked_out_time, a.publish_up, a.publish_down, a.images, a.attribs, a.urls, a.metakey, a.metadesc, a.access,' .
			' CASE WHEN CHAR_LENGTH(a.alias) THEN CONCAT_WS(\':\', a.id, a.alias) ELSE a.id END as slug,'.
			' CASE WHEN CHAR_LENGTH(cc.alias) THEN CONCAT_WS(":", cc.id, cc.alias) ELSE cc.id END as catslug,'.
			' CHAR_LENGTH( a.`fulltext` ) AS readmore,' .
			' u.name AS author, u.usertype, g.name AS groups, u.email as author_email, cc.title AS category, s.title AS section, s.ordering AS s_ordering, cc.ordering AS cc_ordering, a.ordering AS a_ordering, f.ordering AS f_ordering'.

			' FROM jos_content AS a' .
			' INNER JOIN jos_content_frontpage AS f ON f.content_id = a.id' .
			' LEFT JOIN jos_categories AS cc ON cc.id = a.catid'.
			' LEFT JOIN jos_sections AS s ON s.id = a.sectionid'.
			' LEFT JOIN jos_users AS u ON u.id = a.created_by' .
			' LEFT JOIN jos_groups AS g ON a.access = g.id'.
			$where
			.$orderby
			;
$db->setQuery($query);

//$aktu = $db->loadAssoc();
//print_r($aktu);
$aktu = $db->loadAssoc();
?>	<div class="repeater"><!-- start REPEATER class -->
<div class="title">
<?php  echo $aktu['title']; ?>
              </div>
<div class="stamp">
              	<?php  echo $aktu['created']; ?>
              </div>
              <div class="author">
              <?php  echo $aktu['created_by_alias']; ?>
              </div>
              
       	      
       	      <div class="text"> 
              <?php  echo $aktu['introtext']; ?>
<div class="more2">
  <div id="more_yellow">
	                        <a href="?option=com_content&view=article&id=<?php  echo $aktu['id']; ?>&catid=<?php  echo $aktu['a.catid']; ?>&Itemid=2" target="_self">
    	                    </a>
        				</div>
 <div id="more_comments"></div>                       
                    </div>
                      
              </div>

          </div><!-- end REPEATER class --> 
	                <?php
 
				
			
?>     
          <div class="bottom">
          </div>
