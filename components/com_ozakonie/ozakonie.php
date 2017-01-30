<?php


// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$db = & JFactory::getDBO();
/* START HISTORIA */
?>

<?php
function articleShow($id){
    $wynik = '';
    $zap = 'SELECT * FROM #__content WHERE id = '.$id;
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

$a1 = articleShow(636);
display($a1);
/* END HISTORIA */



/* START HERB */
$a2 = articleShow(637);
display($a2);
/* END HERB*/

/* START FORMACJA */
$a3 = articleShow(639);
display($a3);
/* END FORMACJA*/


/* START Działalność */
?>
<div class="top"><!-- start TOP class -->
  <span style="font-size: 20px;">Діяльність</span>
</div><!-- end TOP class -->
<?php
$a4 = articleShow(638);
display($a4);
/* END Działalność*/

/* START Таворські Зустрічі */
?>
<div class="top"><!-- start TOP class -->
  <span style="font-size: 20px;">Таворські Зустрічі</span>
</div><!-- end TOP class -->
<?php
$a5 = articleShow(684);
display($a5);
/* END Таворські Зустрічі*/

/* START Historia klasztoru w Warszawie  */
?>
<div class="top"><!-- start TOP class -->
  <span style="font-size: 20px;">Короткий нарис історії василіанського монастря у Варшаві</span>
</div><!-- end TOP class -->
<?php
$a6 = articleShow(54);
display($a6);
/* END Historia klasztoru w Warszawie */
?>
