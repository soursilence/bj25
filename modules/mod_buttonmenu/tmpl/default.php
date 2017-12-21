<?php
/*
* Plik: tmpl/default.php
*/
defined('_JEXEC') or die ('brak dostępu');
?>
<div class="col-md-3"><div  class="buttons"><!-- start BUTTONS class -->
<ul id="<?php echo $params->get('prefixid'); ?>">
<?php
foreach ($men as $m)
{
  ?>
  <li><a href="<?php echo $m->link; ?>" id="<?php echo $params->get('prefixid').$m->id; ?>" title="<?php echo $m->title; ?>"><?php echo $m->title; ?></a></li>
  <?php
}
?>
</ul>
        </div>
</div><!-- end BUTTONS class -->     