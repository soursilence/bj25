<?php
/**
 * Project  	Newsletter for Joomla 1.5.x
 * Release    	2.0.3
 * @package		Communicator
 * @subpackage	Subscribe Module
 * @version		$Id$
 * @author		Erik Damke (commqc20@jocoflex.com)
 * @link 		http://joomlacode.org/gf/project/communicator/
 * @copyright	Copyright (c) 2009 Erik Damke - All rights reserved
 * @license		http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

/*
 * This program is free software; under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * See if the user wants it horizontal or vertical
 * 0 = Vertical
 * 1 = Horizontal
 */
$position = $params->get('position', 0);

// The Text to be shown in front of the Subscribe Form
$pretext = $params->get('pretext', JText::_('Keep yourself updated with our FREE newsletters now!') );
$show_pretext = $params->get('show_pretext', 0);

//1 to limit the number of characters of title, 0 to disable it
//$chars_limit = $params->get( 'chars_limit', 1);

// used with character limits enabled. the value signifies the number of characters to display
$chars_max = intval( $params->get( 'name_max_length', 15) );
//1 to limit the number of characters of title, 0 to disable it
$chars_limit = ($chars_max==0) ? 0 : 1;      // no limit if #of chars > 0

//to hide the name field, set it to 0
$show_name_field = $params->get( 'show_name_field', 1);

//to display the subscribe/unsubscribe radiobuttons fields, set it to 1
$show_unsubscribe = $params->get( 'show_unsubscribe', 0);


$username = ( !empty( $user->name ) ) ? $user->name : $user->username;

// GetItemid
$query = 'SELECT id'.
				' FROM `#__menu`'.
	 			' WHERE type = "component"'.
	 			' AND published = 1'.
				' AND link = "index.php?option=com_communicator"';

$database->setQuery( $query );
$_Itemid = $database->loadResult();
//echo '<h3>JED '.'_Itemid='.$_Itemid.'.</h3>';
// filter old
// old var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
// new var filter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
?>
<script type="text/javascript" language="Javascript"><!--
	function cmm_gomodtask() {
		var subscriber_name = document.communicatorMod.subscriber_name.value;
		var subscriber_email;
		var max_length = <?php echo $chars_max ?>;
		var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i

		if (filter.test(document.communicatorMod.subscriber_email.value)) {
			subscriber_email = document.communicatorMod.subscriber_email.value;
			var a = true;
		} else {
			alert("<?php echo JText::_('PLEASE ENTER A VALID E-MAIL ADDRESS.',true); ?>");
			var a = true; return false;
		}
		try {
		<?php
	  	if( !empty($chars_limit) && $show_name_field=="1" ) { ?>
			if(document.communicatorMod.subscriber_name.length > max_length) {
				alert("<?php echo JText::_('Please enter use a shorter Subscriber Name. Thanks.',true); ?>");
				return false;
			}
		<?php
	 	}
	  	if( $show_name_field=="1" ) { ?>
			if(document.communicatorMod.subscriber_name.length < 1) {
				alert("<?php echo JText::_('Please enter a Subscriber Name. Thanks.',true); ?>");
				return false;
			}
			<?php
	  	}
	  	?>
		}
		catch(e) {}
		return true;
	} // -->
	</script>
	<div id="sidebar_section"> 
                <div class="head">
                    <div class="name">
                 	   Розсилка новин
                    </div>

                    <!--<div class="option">
                        <a href="#" target="_self">
                    	    Архів &gt;
                        </a>
                    </div>-->
                </div>
                <div class="newsletter">
           	    

<form method="post" name="communicatorMod"
	action="<?php echo JRoute::_('index.php?option=com_communicator&Itemid='.$_Itemid); ?>">
<div class="half">
	               

                  <?php

/*
 * display optional Name input field
 */
if ($show_name_field == 0)
   { ?>
   <input type="hidden" name="subscriber_name" value="<?php echo !empty( $username) ? $username: 'Subscriber'; ?>" />
<?php }
else { // 1 = Horizontal - include <div>
   if ($position == 1) {?> <div style="float: left; margin: 0.3em;"> <?php } ?>
   <span class="smallgrey">
		<label for="subscriber_name"><?php echo JText::_('Name'); ?></label></span>
<?php if ($position == 1) {?></div> <?php }
      else { echo '<br />'; }
   if ($position == 1) {?> <div style="float: left;"><?php } ?>
	<input type="text" id="subscriber_name" style="font-size: smaller;" name="subscriber_name" class="inputbox"
	value="<?php echo $username; ?>" />
<?php if ($position == 1) {?></div> <?php }
      else { echo '<br /><br />'; }
   }

/*
 * display mandatory Email input field
 *
 */
// position=1: Horizontal
if ($position == 1) {?><div style="float: left; margin: 0.3em;"><?php } ?>

<?php if ($position == 1) {?></div> <?php }
   else { echo '<br />'; }
   if ($position == 1) {?><div style="float: left;"><?php } ?>
   <input type="text" id="subscriber_email" name="subscriber_email" class="input"
		value="<?php if(trim($user->email)=="") echo 'Ваш e-майл'; else echo $user->email; ?>" style="width: 200px;" />
<?php if ($position == 1) {?></div> <?php }
      else { echo ''; }

//echo '<h3>JED Before my-id</h3>';

if( $user->id ) {
   $q = 'SELECT subscriber_id'.
				' FROM `#__communicator_subscribers`'.
				' WHERE user_id='.$user->id.
				' OR subscriber_email='.$database->Quote($user->email);
   $database->setQuery($q);
   $subscriber = $database->loadResult();

   if ( empty($subscriber))
      { ?><input name="task" type="hidden" value="subscribe" />
    <input type="submit" class="ok" value="<?php //echo JText::_('Subscribe');
    echo 'ok'; ?>"
	onclick="return cmm_gomodtask();" /> <?php
      }
   else { // not yet registered at newsletter (but registered at domain)
      if ($position == 1) { ?> <div style="float: left; margin-left: 0.5em; margin-top: -0.2em;"><?php } ?>
	<input name="task" type="hidden" value="unsubscribe" />
	<input type="submit" class="newsletter_btn"
	onclick="return( confirm('<?php echo JText::_('CMM_REALLY_UNSUBSCRIBE_NEWSLETTER',true); ?>'));"
	value="<?php echo JText::_('Unsubscribe'); ?>" />
<?php if ($position == 1) {?></div><?php }
   }
}
// user is not logged in
else {
   if ($show_unsubscribe == 1)   // enable radio buttons ?
   {
   // position=1: Horizontal
   if ($position == 1) {?><div style="float: left; margin: 0.3em;"><?php } ?>
   <span class="smallgrey">
   		<input name="task" type="radio" class="inputbox" id="cmm_subscribe" value="subscribe" checked="checked" /></span>
<?php if ($position == 1) {?></div><?php }
   if ($position == 1) {?><div style="float: left; margin-top: 0.5em;"><?php } ?>
   <label for="cmm_subscribe"><?php echo JText::_('Subscribe'); ?></label>
<?php if ($position == 1) {?></div><?php }
      else { echo '<br />'; }

   if ($position == 1) {?><div style="float: left; margin: 0.3em;"><?php } ?>
   <span class="smallgrey">
   		<input name="task" type="radio" class="inputbox" id="cmm_unsubscribe" value="unsubscribe" /></span>
<?php if ($position == 1) {?></div><?php }

   if ($position == 1) {?><div style="float: left; margin-top: 0.5em;"><?php } ?>
   <label for="cmm_unsubscribe"><?php echo  JText::_('Unsubscribe');?></label>
<?php if ($position == 1) {?></div><?php }
      else { echo '<br /><br />'; }

   if ($position == 1) {?><div style="float: left; margin-left: 0.3em;"><?php } ?>
   <input type="submit" class="newsletter_btn" value="<?php echo JText::_('Go!');?>"
		onclick="return cmm_gomodtask();" />
<?php if ($position == 1) {?></div><?php }
   }
   else      // show_unsubscribe == 0)   = disable radio buttons
   { ?>
   <input type="hidden" name="task" value="subscribe" />
<?php if ($position == 1) {?><div style="float: left; margin-left: 0.3em;"><?php } ?>
   <input type="submit" class="ok" value="<?php echo 'ok'; //echo JText::_('Subscribe');?>"
		onclick="return cmm_gomodtask();" />
<?php if ($position == 1) {?></div><?php }
   }
}
echo '</p>';?>
	<input type="hidden" name="Itemid" value="<?php echo $_Itemid; ?>" />
<?php
// used for spoof hardening
$validate = cm_SpoofValue(1);?>
	<input type="hidden" name="<?php echo $validate; ?>" value="1" /></form>
<?php
//echo '<h3>JED at the end'.'_Itemid='.$_Itemid.'.</h3>';
?></div>
                   
              </div>

                <div class="bottom">
                </div>             
			</div>