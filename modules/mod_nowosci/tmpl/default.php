<?php
/*
* Plik: tmpl/default.php
*/
defined('_JEXEC') or die ('brak dostępu');
?>
<div id="sidebar_section">
                <div class="head">
                  <div class="name">
                	    Новини
                  </div>
                    <div class="option">

                        <a href="?option=com_content&view=section&layout=blog&id=1&Itemid=3" target="_self">
                    	   	 Архів &gt;
                        </a>
                    </div>
                </div>
              <div class="gallery">
                <div class="repeat1">
                	<div class="newest">
                      <ul>
 <?php
foreach ($men as $m)
{
$tmp_time = strtotime($m->created);
$czas = "";
if(date("Y-m-d")==date("Y-m-d", $tmp_time))
$czas = "<strong>".date("H:i", $tmp_time)."</strong> - ";
else
$czas = "<strong>".date("Y-m-d", $tmp_time)."</strong> - ";
  ?>
	  
	  <li><a href="?option=com_content&view=article&id=<?php echo $m->id; ?>&catid=<?php echo $m->catid; ?>&Itemid=2" target="_self"><?php echo $czas,$m->title; ?></a></li>

<?php } ?>     
                      
                      </ul>
                    </div>
				</div>
			</div>
                <div class="bottom">
                </div>            
            </div>