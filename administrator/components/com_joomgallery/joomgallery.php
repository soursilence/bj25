<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-2.0/JG/trunk/administrator/components/com_joomgallery/joomgallery.php $
// $Id: joomgallery.php 3865 2012-09-15 14:40:47Z chraneco $
/****************************************************************************************\
**   JoomGallery 2                                                                      **
**   By: JoomGallery::ProjectTeam                                                       **
**   Copyright (C) 2008 - 2012  JoomGallery::ProjectTeam                                **
**   Based on: JoomGallery 1.0.0 by JoomGallery::ProjectTeam                            **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

if(version_compare(JVERSION, '3.0', 'ge'))
{
  JToolBarHelper::title('JoomGallery');

  return JError::raiseWarning(500, JText::_('JoomGallery 2.1 is not compatible with Joomla! 3. Please update to a newer version of JoomGallery once it is available.'));
}

// Require the base controller and the defines
require_once(JPATH_COMPONENT.DIRECTORY_SEPARATOR.'controller.php');
require_once(JPATH_COMPONENT.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'defines.php');

// Access check
if(!JFactory::getUser()->authorise('core.manage', _JOOM_OPTION))
{
  return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Enable JoomGallery plugins
JPluginHelper::importPlugin('joomgallery');

// Require specific controller if requested
if($controller = JRequest::getCmd('controller', 'control'))
{
  $format = JRequest::getCmd('format', 'html');
  $path = JPATH_COMPONENT.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR.$controller.(($format != 'html') ?  '.'.$format : '').'.php';
  if(file_exists($path))
  {
    require_once $path;
  }
  else
  {
    $controller = '';
  }
}

// Register some classes
JLoader::register('JoomGalleryModel', JPATH_COMPONENT.DIRECTORY_SEPARATOR.'model.php');
JLoader::register('JoomGalleryView',  JPATH_COMPONENT.DIRECTORY_SEPARATOR.'view.php');
JLoader::register('JoomExtensions',   JPATH_COMPONENT.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'extensions.php');
JLoader::register('JoomHelper',       JPATH_COMPONENT.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'helper.php');
JLoader::register('JoomConfig',       JPATH_COMPONENT.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'config.php');
JLoader::register('JoomAmbit',        JPATH_COMPONENT.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'ambit.php');
JLoader::register('JoomFile',         JPATH_COMPONENT.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'file.php');
JTable::addIncludePath(               JPATH_COMPONENT.DIRECTORY_SEPARATOR.'tables');

// Create the controller
$classname  = 'JoomGalleryController'.$controller;
$controller = new $classname();

// Perform the request task
$controller->execute(JRequest::getVar('task'));

// Redirect if set by the controller
$controller->redirect();