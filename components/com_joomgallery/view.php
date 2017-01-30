<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-2.0/JG/trunk/components/com_joomgallery/view.php $
// $Id: view.php 3803 2012-06-01 21:44:22Z erftralle $
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

jimport( 'joomla.application.component.view');

/**
 * Parent HTML View Class for JoomGallery
 *
 * @package JoomGallery
 * @since   1.5.5
 */
class JoomGalleryView extends JView
{
  /**
   * JApplication object
   *
   * @var   object
   */
  protected $_mainframe;

  /**
   * JoomConfig object
   *
   * @var   object
   */
  protected $_config;

  /**
   * JoomAmbit object
   *
   * @var   object
   */
  protected $_ambit;

  /**
   * JUser object, holds the current user data
   *
   * @var   object
   */
  protected $_user;

  /**
   * JDocument object
   *
   * @var   object
   */
  protected $_doc;

  /**
   * Constructor
   *
   * @return  void
   * @since   1.5.5
   */
  public function __construct($config = array())
  {
    parent::__construct($config);

    $this->_ambit     = JoomAmbit::getInstance();
    $this->_config    = JoomConfig::getInstance();

    $this->_mainframe = JFactory::getApplication('site');
    $this->_user      = JFactory::getUser();
    $this->_doc       = JFactory::getDocument();

    JHTML::addIncludePath(JPATH_COMPONENT.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'html');

    // If we are just displaying an image we don't need anything else
    if(JRequest::getCmd('format') == 'raw' || JRequest::getCmd('format') == 'jpg' || JRequest::getCmd('format') == 'json' || JRequest::getCmd('format') == 'feed')
    {
      return;
    }

    // Add the CSS file generated from backend settings
    $this->_doc->addStyleSheet($this->_ambit->getStyleSheet($this->_config->getStyleSheetName()));

    // Add the main CSS file
    $this->_doc->addStyleSheet($this->_ambit->getStyleSheet('joomgallery.css'));

    // Add invidual CSS file if it exists
    if(file_exists(JPATH_ROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'joomgallery'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'joom_local.css'))
    {
      $this->_doc->addStyleSheet($this->_ambit->getStyleSheet('joom_local.css'));
    }

    $pngbehaviour = "  <!-- Do not edit IE conditional style below -->"
                  . "\n"
                  ."  <!--[if lte IE 6]>"
                  . "\n"
                  . "  <style type=\"text/css\">\n"
                  . "    .pngfile {\n"
                  . "      behavior:url('".JURI::root()."media/joomgallery/js/pngbehavior.htc') !important;\n"
                  . "    }\n"
                  . "  </style>\n"
                  . "  <![endif]-->"
                  . "\n"
                  . "  <!-- End Conditional Style -->";
    $this->_doc->addCustomTag($pngbehaviour);

    // Set documents meta data taken from menu entry definition
    $params = $this->_mainframe->getParams();
    if($params->get('menu-meta_description'))
    {
      $this->_doc->setDescription($params->get('menu-meta_description'));
    }
    if($params->get('menu-meta_keywords'))
    {
      $this->_doc->setMetadata('keywords', $params->get('menu-meta_keywords'));
    }
    if($params->get('robots'))
    {
      $this->_doc->setMetadata('robots', $params->get('robots'));
    }

    // Page title
    $pagetitle = JoomHelper::addSitenameToPagetitle($this->_doc->getTitle());
    $this->_doc->setTitle($pagetitle);
  }

  /**
   * Returns all found modules published at the given position
   *
   * @param   string  $pos  The name of the module position to load
   * @return  string  The HTML output of the modules for displaying them
   * @since   1.5.5
   */
  public function loadModules($pos)
  {
    $html = '';

    $modules = JoomHelper::getRenderedModules($pos);
    if(count($modules))
    {
      ob_start();
      foreach($modules as $module): ?>
  <div class="jg_module">
<?php   if($module->showtitle): ?>
    <div class="sectiontableheader">
      <h4>
        <?php echo $module->title; ?>&nbsp;
      </h4>
    </div>
<?php   endif;
        echo $module->rendered; ?>
  </div>
<?php endforeach;
      $html = ob_get_contents();
      ob_end_clean();
    }

    return $html;
  }
}