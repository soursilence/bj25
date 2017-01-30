<?php defined('_JEXEC') or die('Restricted access'); ?>


		<?php
		foreach( $this->results as $result ) : ?>
<div class="topalt">
 </div>
<div class="repeater2"><!-- start REPEATER class -->
       	      <div class="title">
       	      <?php if ( $result->href ) :
						if ($result->browsernav == 1 ) : ?>
							<a href="<?php echo JRoute::_($result->href); ?>" target="_blank"><?php echo $this->pagination->limitstart + $result->count.'. ';?> 
						<?php else : ?>
							<a href="<?php echo JRoute::_($result->href); ?>"><?php echo $this->pagination->limitstart + $result->count.'. ';?> 
						<?php endif;

						echo $this->escape($result->title);

						if ( $result->href ) : ?>
							</a>
						<?php endif; ?>
						
					<?php endif; ?>
              </div>
<?php if ( $result->section ) : ?>
							<div class="author">
(<?php echo $this->escape($result->section); ?>)          </div>
						<?php endif; ?>
              
 <div class="text"> 
<?php echo $result->text; ?>
</div>
  
          </div><!-- end REPEATER class -->            
          <div class="bottom">
          </div>

          <div class="sepaparate">
          </div>



			

		<?php endforeach; ?>

			<div align="center">
				<?php echo $this->pagination->getPagesLinks( ); ?>
			</div>

