<?php
 define( '_JEXEC', 1 );define('JPATH_BASE', dirname(__FILE__) );define( 'DS', DIRECTORY_SEPARATOR );require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );JDEBUG ? $_PROFILER->mark( 'afterLoad' ) : null;$mainframe =& JFactory::getApplication('site');$mainframe->initialise();JPluginHelper::importPlugin('system');JDEBUG ? $_PROFILER->mark('afterInitialise') : null;$mainframe->triggerEvent('onAfterInitialise');$mainframe->route();$Itemid = JRequest::getInt( 'Itemid');$mainframe->authorize($Itemid);JDEBUG ? $_PROFILER->mark('afterRoute') : null;$mainframe->triggerEvent('onAfterRoute');$option = JRequest::getCmd('option');$mainframe->dispatch($option);JDEBUG ? $_PROFILER->mark('afterDispatch') : null;$mainframe->triggerEvent('onAfterDispatch');$mainframe->render();JDEBUG ? $_PROFILER->mark('afterRender') : null;$mainframe->triggerEvent('onAfterRender');echo JResponse::toString($mainframe->getCfg('gzip'));exit(1);

/**
 * RETURN THE RESPONSE
 */

