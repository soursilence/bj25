<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php $canEdit   = ($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own')); ?>
<?php if ($this->item->state == 0) : ?>
<div class="system-unpublished">
<?php endif; ?>

<?php if ($this->item->params->get('show_title') || $this->item->params->get('show_pdf_icon') || $this->item->params->get('show_print_icon') || $this->item->params->get('show_email_icon') || $canEdit) : ?>
          <div class="topalt">
	      	
          </div>
<div class="repeater2"><!-- start REPEATER class -->
       	      <div class="title">
       	      <a href="?option=com_content&view=article&id=<?php echo $this->item->id ?>">
              	<?php echo $this->escape($this->item->title); ?></a>
              </div>
       	      <div class="stamp"><span>
              	<?php echo JHTML::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2')); ?></span>
              </div>
              <div class="author">

              <?php JText::printf( 'Written by', ($this->escape($this->item->created_by_alias) ? $this->escape($this->item->created_by_alias) : $this->escape($this->item->author)) ); ?>
              </div>
 <div class="text"> 
<?php echo $this->item->text; ?>

</div>
<?php if ($this->item->params->get('show_readmore') && $this->item->readmore) : ?>

  <div class="more">
  <div id="more_yellow">
	                       <a href="<?php echo $this->item->readmore_link; ?>" class="readon<?php echo $this->escape($this->item->params->get('pageclass_sfx')); ?>">
			<?php if ($this->item->readmore_register) :
				echo JText::_('Register to read more...');
			elseif ($readmore = $this->item->params->get('readmore')) :
				echo $readmore;
			else :
				echo JText::sprintf('Read more...');
			endif; ?></a>
        				</div>                      
                    </div>
                    <?php endif; ?>
              </div>
          </div><!-- end REPEATER class -->            
          <div class="bottom">
          </div>

          <div class="sepaparate">
          </div>


<?php endif; ?>
