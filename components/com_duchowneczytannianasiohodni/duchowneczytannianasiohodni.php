<?php


// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$data_dzis = date("Y-m-d")." 23:59:59";

$id_box1=75;
$id_box2=73;
$id_box3=74;

$tytul1="Із життія Святих";
$tytul2="Апостол";
$tytul3="Євангеліє ";

function articleShow($id){
    $wynik = '';
    $zap = "SELECT * FROM #__content WHERE catid = ".$id." and publish_up<='".date("Y-m-d, h:i:s")."'"
	." ORDER BY created desc ";
	$db = & JFactory::getDBO();
   $db->setQuery($zap);
    $a = $db->loadRow();
    //print_r($a);
    //$wynik .= $a[5];    
    
    return $a;
  }
function display($a1){
    ?>
<div class="top" style="margin-top: 10px;"><!-- start TOP class -->
  <span style="font-size: 20px;"><?php  echo $a1[2]; ?></span>
</div><!-- end TOP class -->	
<div class="repeater"><!-- start REPEATER class -->
  <div class="text"> 
              <?php  echo $a1[5]; ?>
    <div class="more2">
      <div id="more_yellow">
        <a href="?option=com_content&view=article&id=<?php  echo $a1[0]; ?>&Itemid=2" target="_self"></a>
      </div>
      <div id="more_comments"></div>                       
    </div>
  </div>
</div><!-- end REPEATER class -->     
<div class="bottom"></div>
<div class="sepaparate"></div>           
<?php	
   
  }
/* START z życia świętych */
?>
<div class="top"><!-- start TOP class -->
  <span style="font-size: 20px;"><?php echo $tytul1; ?></span>
</div><!-- end TOP class -->
<?php
$a1 = articleShow($id_box1);
display($a1);

/* END z życia świętych */



/* START Apostoł */
?>
<div class="top"><!-- start TOP class -->
  <span style="font-size: 20px;"><?php echo $tytul2; ?></span>
</div><!-- end TOP class -->
<?php

$a2 = articleShow($id_box2);
display($a2);

/* END Apostoł*/

/* START Ewangelie */
?>
<div class="top"><!-- start TOP class -->
  <span style="font-size: 20px;"><?php echo $tytul3; ?></span>
</div><!-- end TOP class -->
<?php
$a3 = articleShow($id_box3);
display($a3);
/* END Ewangelie*/


?>