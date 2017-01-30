<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<div id="sidebar_section"> 
<form action="index.php" method="post" name="form2">
<div class="head" style="position: relative; top: -5px; ">
                    <div class="name">
                  	  Опитування
                    </div>
                    <div class="option">
                        <a href="#" target="_self">

                  	      Архів &gt;
                        </a>
                    </div>
                </div>
                 <div class="survey">
                 <div class="question"><?php echo $poll->title; ?></div>
<table style="background: url('templates/bazylianie/img/sidebar_section_repeater.png') repeat-y; width:290px;"  border="0" cellspacing="0" cellpadding="1" align="center" class="poll<?php echo $params->get('moduleclass_sfx'); ?>">

	<tr>
		<td align="center">
			<table class="pollstableborder<?php echo $params->get('moduleclass_sfx'); ?>" cellspacing="0" cellpadding="0" border="0">
			<?php for ($i = 0, $n = count($options); $i < $n; $i ++) : ?>
				<tr>
					<td class="<?php echo $tabclass_arr[$tabcnt]; ?><?php echo $params->get('moduleclass_sfx'); ?>" valign="top">
						<input type="radio" name="voteid" id="voteid<?php echo $options[$i]->id;?>" value="<?php echo $options[$i]->id;?>" alt="<?php echo $options[$i]->id;?>" />
					</td>
					<td class="<?php echo $tabclass_arr[$tabcnt]; ?><?php echo $params->get('moduleclass_sfx'); ?>" valign="top">
						<label for="voteid<?php echo $options[$i]->id;?>">
							<?php echo $options[$i]->text; ?>
						</label>
					</td>
				</tr>
				<?php
					$tabcnt = 1 - $tabcnt;
				?>
			<?php endfor; ?>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<div align="center">
				<input type="submit" name="task_button" class="button" value="<?php echo JText::_('Vote'); ?>" />
				&nbsp;
				<input type="button" name="option" class="button" value="<?php echo JText::_('Results'); ?>" onclick="document.location.href='<?php echo JRoute::_("index.php?option=com_poll&id=$poll->slug".$itemid); ?>'" />
			</div>
		</td>
	</tr>
</table>

	<input type="hidden" name="option" value="com_poll" />
	<input type="hidden" name="task" value="vote" />
	<input type="hidden" name="id" value="<?php echo $poll->id;?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
</div>

                <div class="bottom">
                </div>             
           </div>  