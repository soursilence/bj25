<?php
/*
* Plik: tmpl/default.php
*/
defined('_JEXEC') or die ('brak dostępu');

$sciezka_do_zdjec = "/images/stories/parafie/";
$parafia_foto = array();
$parafia_foto[41] = "asuny.jpg";
$parafia_foto[42] = "bajory.jpg";
$parafia_foto[43] = "baniemazurskie.jpg";
$parafia_foto[44] = "warszawa.jpg";
$parafia_foto[45] = "wegorzewo.jpg";
$parafia_foto[46] = "wydminy.jpg";
$parafia_foto[47] = "gizycko.jpg";
$parafia_foto[48] = "ketrzyn.jpg"; 
$parafia_foto[49] = "kruklanki.jpg";
$parafia_foto[50] = "reszel.jpg"; 
?>
<div id="sidebar_section">
  <div class="mojaparafia_head"  style="margin-bottom: 0px;">
    <div class="name" style="display: inline; width: 270px; position: relative;"><?php
			 //<strong><?php echo $dane['m'][$dane['mojaparafia']]; ></strong>
			 ?>
			 
                    <form action="" method="post">
                    <div style="display: inline;">
                      
           	      Моя парафiя: <select name="setmp" onchange="this.form.submit();">
                        <?php
                        foreach($dane['m'] as $k => $v){
                          echo "<option value=\"$k\"";
			  if($k == $dane['mojaparafia']) echo ' selected="selected"';
			  echo ">$v</option>
			  ";
                        
                        }
                        ?>
                      </select>
                      <!--<input type="submit" value="поміняти" /> -->
                    </div>
      </form><a class="mojaparafia_link" href="index.php?option=com_parafie&k=<?php echo $dane['mojaparafia']; ?>&Itemid=7">&gt;&gt;&gt;</a>
    </div>

                  
                  
  </div>
    <div class="gallery">
                <div class="repeat1">
                	<div class="incat">
          <?php
   // print_r($dane['a']);
foreach ($dane['a'] as $kart => $vart)
{
/*$tmp_time = strtotime($m->created);
$czas = "";
if(date("Y-m-d")==date("Y-m-d", $tmp_time))
$czas = "<strong>".date("H:i", $tmp_time)."</strong> - ";
else
$czas = "<strong>".date("Y-m-d", $tmp_time)."</strong> - ";*/
  ?>
	  
	  <a href="?option=com_content&view=article&id=<?php echo $kart; ?>&catid=<?php echo $dane['mojaparafia'] ?>&Itemid=7" target="_self"><?php echo $vart; ?></a> 

<?php } ?>     
                      
                                           
					</div>
                </div>

			</div>
  <!--<div class="parish">
    
    <img src="<?php echo $sciezka_do_zdjec.$parafia_foto[$dane['mojaparafia']]; ?>"  alt="<?php echo $dane['m'][$dane['mojaparafia']]; ?>" class="img-p" />
    <div id="myparish_links">
      <a href="index.php?view=parafie&layout=blog&id=<?php echo $dane['mojaparafia']; ?>&option=com_content&Itemid=3#">Сторінка моєї парафії</a>
    </div>
  </div>-->
                
		
  <div class="bottom">
  </div>         
</div>

