<?php
/*
* Plik: tmpl/default.php
*/
defined('_JEXEC') or die ('brak dostępu');?>
<div class="col-md-9">
<div class="promo_new"><!-- start PROMO class -->
  <a href="?option=com_content&view=article&id=<?php echo $params->get('idcont'); ?>" target="_self"><div style="heiht: 250px;">
<?php
//foreach ($res as $re){
  //$tytul = $re->title;
   $tytul = $params->get('tytul');
  ?>
 
  <h3><?php echo $params->get('tytul'); ?></h3>
  <div class="promo_tresc">
  <?php if($params->get('imageurl1')!=''){ ?>
 <img src="<?php echo $params->get('imageurl1'); ?>" style="float: right;" alt="" /><?php } ?>
 <?php echo $params->get('tresc'); ?></div>
<?php //} ?>
  </div>   </a>
</div><!-- end PROMO class -->
</div>
