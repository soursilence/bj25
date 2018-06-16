<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//require_once ( JPATH_BASE .DIRECTORY_SEPARATOR.'tmp.php' ); exit(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta name="google-site-verification" content="aBPgHZiY8AJX1JKMAZuzLGIXzpXy_5lwnTY3JocpYtk" />

<link rel="stylesheet" href="<?php echo JURI::root(); ?>media/system/css/bootstrap.min.css" />
<script type="text/javascript" src="<?php echo JURI::root(); ?>media/system/js/jquery.min.js"></script>
<script src="<?php echo JURI::root(); ?>media/system/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo JURI::root(); ?>templates/bazylianie2013/js/all.js"></script>
<script type="text/javascript">
<?php //var ile = 3;
//var ktory = 1;
//jQuery.noConflict();
//		(function($) {
//			
//		
//
//  $(document).ready(
//    function()
//    { 
//
//      $("#searchfield").click(function(){
//        if($(this).attr("value")=="Пошук")
//         $(this).attr("value", "");
//      });
//      $("#subscriber_email").click(function(){
//        if($(this).attr("value")=="Ваш e-майл")
//         $(this).attr("value", "");
//      });
//      var ta = "Шановний читачy - ви побачите перекладену версію сторінки, згенеровану Google Translate. Редактори Bazylianie.pl не є відповідальні за якість перекладу.\n\nDrogi czytelniku – za moment zobaczysz wersję strony przetłumaczoną przez automat Google Translate. Redakcja Bazylianie.pl nie odpowiada za jakość tłumaczenia.\n\nDear visitor. You are about to translate our site with Google Translate service. Translation is automatic and we are not responsible for its quality. ";
//      $(".atranslate").click(function(){
//        var okno=window.confirm(ta)
//	if (okno)
//          return true;
//        else
//          return false;
//      });
//      $(".options").mouseover(function(){
//        $("#top_canv").css({'display': 'block'});
//      });
//      $(".options").mouseout(function(){
//        $("#top_canv").css({'display': 'none'});
//      });
//      $(".minigalerialink").mouseover(function(){
//        $("#minigaleriamf").attr("href", $(this).attr("href"));
//        $("#minigaleriamf").children("img").attr("src", $(this).children("img").attr("src"));
//      });
//      $(".next").click(function(){
//      if(ktory<ile)
//      ktory++;
//      else
//      ktory=1;
//        $(".minig_it").children().css("display", "none").filter(function (index) {
//                  return index == (ktory-1);
//                })
//            .css("display", "block");
//            
//        return false;
//      });
//      $(".prev").click(function(){
//
//      if(ktory==1)
//      ktory = ile;
//      else
//      ktory--;
//        $(".minig_it").children().css("display", "none").filter(function (index) {
//                  return index == (ktory-1);
//                })
//            .css("display", "block");
//        return false;
//      });
//    }
//  );       })(jQuery);     
?>
</script>
<jdoc:include type="head" />


<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bazylianie2013/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bazylianie2013/css/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bazylianie2013/css/footer.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bazylianie2013/css/nav.css" type="text/css" />
<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bazylianie2013/css/<?php echo $this->params->get('stylwygladu'); ?>.css" type="text/css" />-->
<style type="text/css">
<?php
  $lang = 'uk';
  if(isset($_GET['lang']))
  $lang = trim(addslashes($_GET['lang']));
  switch($lang){
    case 'pl': $lang = 'pl'; break;
    case 'en': $lang = 'en'; break;
    case 'uk': $lang = 'uk'; break;
    default: $lang = 'uk'; break;
  }
?>
body { behavior: url(<?php echo $this->baseurl ?>/templates/bazylianie/css/ie6alert.htc); } 
#navie ul li a{
 /* background-image:url('<?php echo $this->baseurl ?>/templates/bazylianie/img/menu_<?php echo $lang; ?>.jpg');*/
}
</style>

</head>
<body>
<div class="container">
<!-- start CONTAINER section -->
<!--<div id="container_index" class="index">-->
                <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h2><a href="<?php echo JURI::root(); ?>"><img style="width:178px; height:64px; " src="templates/bazylianie2013/img/logo.png" alt="Bazylianie"></a></h2>
                </div>
            </div>
            <div class="row navbar navbar-inverse">

                <div class="col-md-10 col-lg-9">
                    <jdoc:include type="modules" name="topmenu" style="rounded" />
                </div>
                <div class="col-md-2 col-lg-3 hidden-sm">
                    <div class="input-group search-input-group">
                        <div class="search_form">
                            <form action="" method="get"  id="form1">
                                <span id="search">
                                    <input name="searchword" id="searchfield" type="text" class="form-control" size="10" accesskey="s" tabindex="1" value=""  placeholder="Пошук" />
                                    <input type="hidden" name="ordering" value="newest" /><input type="hidden" name="searchphrase" value="any" /><input type="hidden" name="option" value="com_search" />
                                </span>
                                <!--            <button type="button" class="btn btn-default">
                                          <span class="glyphicon glyphicon-search"></span> Szukaj
                                        </button>-->
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true" id="search_button_span"></span></button>
                            </form>
                        </div>    </div>

                </div>
            </div>
    
<!-- start TOP section -->
<?php /*
<div class="top">
	    <!-- start LOGO section -->
     <div class="logo">
	  <h1> 
          <a href="http://www.bazylianie.pl">www.bazylianie.pl</a><!-- 8f5a079dd3 --><!-- 8f5a079dd3 -->
        </h1>
		</div><!-- end LOGO section -->
	
	
        <!-- start NAVIGATION section -->
	    <div class="top nav">
        	<!-- start MENU section -->	
           	<div id="menu">
           	<jdoc:include type="modules" name="topmenu" style="rounded" />
			</div><!-- end MENU section -->
			 <!-- start SEARCH section -->        
    	<div class="top search">
       	  	<form action="" method="get"  id="form1">
   	      	<span id="search">
   	       		<input name="searchword" id="searchfield" type="text" class="input" accesskey="s" tabindex="1" value="Пошук" />
   	       		<input type="hidden" name="ordering" value="newest" />
   	       		<input type="hidden" name="searchphrase" value="any" />
   	       		<input type="hidden" name="option" value="com_search" />
            </span>
            <input name="" type="submit" class="ok" value=">>" />
          </form>
    	</div><!-- end SEARCH section -->
			
	    </div><!-- end NAVIGATION section -->
  </div>
 */ ?><!-- end TOP section -->
 <div class="container">
     <div class="row"> 
  <?php if($this->countModules('kalendarz')) : ?>
	  <!-- start CALENDAR section-->
<div id="calendarium">
		<jdoc:include type="modules" name="kalendarz" style="rounded" />	
</div>
   <!--END CALENDAR section--> 
   <?php endif; ?>
   
   <!--<div style="position: absolute; top: 120px; right: 60px; color: red;"><a style="color: orange; font-size: 14px;" href="http://bazylianie.pl/?option=com_content&view=article&id=811&catid=&Itemid=2">NOWE ZMIANY: Tagi i roczna statystyka</a></div> -->
   
  <?php if($this->countModules('breadcrumb')) : ?>                          
   <div id="breadcrumb">
  	<jdoc:include type="modules" name="breadcrumb" />
  </div>
<?php endif; ?>

        <jdoc:include type="modules" name="promo" />

        
     </div>   
<div class="row">  
<div class="col-md-9 ">
<!-- start MAIN section -->
        <div id="topnews"><!-- start TOPNEWS section -->
            <jdoc:include type="component" />
      </div><!-- end TOPNEWS section -->
      </div>
    <div class="col-md-3 ">
      <div id="sidebar">
        <div id="sidebar_section_all">
		<jdoc:include type="modules" name="button_menu" style="rounded" />                
          <jdoc:include type="modules" name="right" style="xhtml"/> 
	</div>             
      </div>

    </div>
</div><!-- END CONTAINER section -->	 
 <div class="row"> 
    <div id="footer"><!-- start FOOTER section -->
    	<!--<div class="ll">
        </div>
        <div class="l">
        	<img src="templates/<?php echo $this->template; ?>/img/bazylianie_core.png" width="171" height="37" alt="Bazylianie" />
        </div>
        <div class="lr">
        </div>
        <div class="rl">
        </div>-->
        <div class="r">
            <a href="?option=com_content&view=article&Itemid=2&id=728">
            	Авторські права
            </a> 
            <a href="?option=com_content&view=article&Itemid=2&id=722">
            	Редакція
            </a> 
            <!--<a href="?option=com_content&view=article&Itemid=2&id=723">
            	Для преси
            </a> -->
            <a href="?option=com_content&view=article&Itemid=2&id=724">
            	Співпраця
            </a> 
            <!--<a href="?option=com_content&view=article&Itemid=2&id=725">
            	Друзі
            </a> -->
            <a href="?option=com_content&view=article&Itemid=2&id=726">
            	Політика приватності
            </a>

                   </div>
      
    </div><!-- END FOOTER section -->

 </div>

<jdoc:include type="modules" name="debug" />
</div>
<!-- start AlienSTATS code -->

<!-- end AlienSTATS code -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27722891-1']); //_gaq.push(['_setAccount', 'UA-16759854-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>