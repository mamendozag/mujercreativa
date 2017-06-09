<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = $this;
$templateUrl = $document->baseurl . '/templates/' . $document->template;
Artx::load("Artx_Page");
$view = $this->artx = new ArtxPage($this);
$view->componentWrapper();
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;


?>
<!-- Parametry -->
<?php require("admin/params.php"); ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head><!--scroling head-->
<script src="templates/ig/js/scroling.js"></script>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<!--scroling koniec head-->
<!--animation header start-------------------------------------------------------->

  <?php if ($slider_enabled == 1) { ?><link rel="stylesheet" href="templates/ig/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="templates/ig/themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="templates/ig/themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="templates/ig/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="templates/ig/css/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="templates/ig/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="templates/ig/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script><?php } ?>
<!--animation header end---------------------------------------------------------->  
<jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/style_si.css" media="screen">
    <!--[if lt IE 9]>
   <style>
      .primary-menu li span {
         display:none;
         background:#ffffff !important;
      }
      .primary-menu li a:hover ~ span {
         display:block;
      }
   </style>
<![endif]-->

    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">


    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
    
<link href="css/template.css" rel="stylesheet" type="text/css">
<!--Google Analytics Tracking Code --> 		
<?php if($google) {echo '<script type="text/javascript">'; echo $google; echo '</script>';}?>
</head>
<body><!--scroling-->
<div id="toTop">^<?php if ($back!= null ): ?>
		<?php echo htmlspecialchars($back); ?>
		<?php endif; ?></div>
<!--koniec scroling-->

<div id="diablodesign-main">
<header class="diablodesign-header clearfix"><?php echo $view->position('position-30', 'diablodesign-nostyle'); ?>


    <div class="diablodesign-shapes">
  

<div class="diablodesign-object737561416" data-left="0%"></div>
<div class="diablodesign-object246674416" data-left="0%"><div class="ani">            


<div id="wrapper">
<div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
       
                <?php if ($slider_enabled == 1) { ?><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($foto1); ?>" style="margin:0 auto; max-width:673px; max-height:332px;" alt="" title="#1slide" /><?php } ?>
                    <?php if ($slider_enabled == 1) { ?> <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($foto2); ?>" style="margin:0 auto; max-width:673px; max-height:332px;" alt="" title="#2slide"/><?php } ?>
                     <?php if ($slider_enabled == 1) { ?><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($foto3); ?>" style="margin:0 auto; max-width:673px; max-height:332px;" alt="" title="#3slide" /><?php } ?>
                     <?php if ($slider_enabled == 1) { ?><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($foto4); ?>" style="margin:0 auto; max-width:673px; max-height:332px;" alt="" title="#4slide" /><?php } ?>
              <?php if ($slider_enabled == 1) { ?><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($foto5); ?>" style="margin:0 auto; max-width:673px; max-height:332px;" alt="" title="#5slide" /><?php } ?>
 
</div>
</div>
</div>
</div>
<?php if ($text1d == 1) { ?><div id="1slide" class="nivo-html-caption"><?php echo $text1; ?></div><?php } ?>
<?php if ($text2d == 1) { ?><div id="2slide" class="nivo-html-caption"><?php echo $text2; ?></div> <?php } ?>
<?php if ($text3d == 1) { ?><div id="3slide" class="nivo-html-caption"><?php echo $text3; ?></div><?php } ?>
<?php if ($text4d == 1) { ?><div id="4slide" class="nivo-html-caption"><?php echo $text4; ?></div><?php } ?>
<?php if ($text1d == 1) { ?><div id="5slide" class="nivo-html-caption"><?php echo $text5; ?></div><?php } ?>
<!-----------------------koniec animacja pliki graficzne-----------------------> </div>
<div class="diablodesign-object499590671" data-left="0%"></div>
<div class="diablodesign-object173655472" data-left="0%"><a href="index.php">
       <?php if ($logo != null ): ?>
		<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" style="margin:0 auto;"/>
		<?php endif; ?></a></div>
<div class="diablodesign-object1630835330" data-left="52.49%"></div>
<div class="diablodesign-object1083216417" data-left="0%"></div>

<!--share icon-->
<?php if ($allicon == 1) { ?><div class="diablodesign-icon"><div id="content">

  <h1 style="padding:20px 0 0; text-align:center; color:#ffffff; font-size:30px;">&nbsp;</h1>

	<!-- change this div to a nav tag if you're not planning on supporting IE users -->
	<div class="menu">
		<ul class="primary-menu">
			
           <?php if ($iconf == 1) { ?>  <li class="facebook"><a class="social-item" href="<?php echo $facebook; ?>">f</a><span class="social-span"><?php echo $facebookt; ?></span></li><?php } ?>
                            
                            
			<?php if ($icont == 1) { ?><li class="twitter"><a class="social-item" href="<?php echo $twitter; ?>">t</a><span class="social-span"><?php echo $twittert; ?></span></li><?php } ?>
                            
			<?php if ($iconfl== 1) { ?><li class="flickr"><a class="social-item" href="<?php echo $flickr; ?>">c</a><span class="social-span"><?php echo $flickrt; ?></span></li><?php } ?>
			
            <?php if ($iconrss== 1) { ?><li class="rss"><a class="social-item" href="<?php echo $rss; ?>">a</a><span class="social-span"><?php echo $rsst; ?></span></li><?php } ?>
                            
			<?php if ($icone== 1) { ?><li class="mail"><a class="social-item" href="<?php echo $email; ?>">k</a><span class="social-span"><?php echo $emailt; ?></span></li><?php } ?>
		</ul>
	</div>
	<!-- change this div to a nav tag if you're not planning on supporting IE users -->
	
	<p class="credits" style="padding:60px 0 20px; text-align:center; font-size:20px;">&nbsp;</p>
</div>
    
	<!--[if lt IE 9]>
		<p class="ie-warning" style="text-align:center; line-height:30px;">
		<span style="font-size:20px;">Warning</span><br />
		It appears that you are using an out-of-date browser.<br />
		To join the rest of the civilized world, please download one of the following browsers:<br />
		<a href="http://www.mozilla.org/en-US/firefox/new" target="_blank">Mozilla Firefox</a> |
		<a href="http://www.google.com/chrome" target="_blank">Google Chrome</a> |
		<a href="http://www.opera.com/" target="_blank">Opera</a>
	<![endif]--></div>
            </div><?php } ?>
            <!-- end share icon-->
<div class="diablodesign-textblock diablodesign-object714367995" data-left="99.74%">
    <form class="diablodesign-search" name="Search" action="<?php echo $document->baseurl; ?>/index.php/component/search/">
    <input type="text" value="" name="searchword">
    <input type="submit" value="Search" name="search" class="diablodesign-search-button">
</form>
</div>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="diablodesign-nav clearfix">
    <div class="diablodesign-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="diablodesign-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="diablodesign-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>



    
 
        </div>
    </nav>
<?php endif; ?>

                    
</header>
<div class="diablodesign-sheet clearfix">
            <?php echo $view->position('position-15', 'diablodesign-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'diablodesign-block'); ?>
<div class="diablodesign-layout-wrapper clearfix">
                <div class="diablodesign-content-layout">
                    <div class="diablodesign-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="diablodesign-layout-cell diablodesign-sidebar1 clearfix">
<?php echo $view->position('position-7', 'diablodesign-block'); ?>
<?php echo $view->position('position-4', 'diablodesign-block'); ?>
<?php echo $view->position('position-5', 'diablodesign-block'); ?>




                        </div>
<?php endif; ?>

                        <div class="diablodesign-layout-cell diablodesign-content clearfix">
<?php
  echo $view->position('position-19', 'diablodesign-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'diablodesign-article');
  echo $view->position('position-12', 'diablodesign-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' diablodesign-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'diablodesign-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'diablodesign-article');
  echo $view->position('position-25', 'diablodesign-nostyle');
?>



                        </div>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'diablodesign-block'); ?>
<?php echo $view->position('position-26', 'diablodesign-nostyle'); ?>

<footer class="diablodesign-footer clearfix"><?php echo $view->position('position-27', 'diablodesign-nostyle'); ?></footer>

    </div>
    <p class="diablodesign-page-footer">
        <span id="diablodesign-footnote-links">Copyright © 2012.<!--wstawia link z panelu konfiguracyjnego-->	 
	 <?php if ( isset( $footer_link ) && strlen( $footer_link) > 0 ) : ?>
							<a href="<?php echo $footer_link ?>">
							<?php endif; ?>
                            
<!-- koniec wstawia link z panelu  konfiguracyjnego-->
                  <?php if ($footer!= null ): ?>
		<?php echo htmlspecialchars($footer); ?>
		<?php endif; ?>
                  </a> <span id="dd-footnote-links"> Designed by:  <a href="http://www.diablodesign.eu" target="_blank">www.diablodesign.eu</a></span></p>
    </p>
</div>



<?php echo $view->position('debug'); ?>
</body>

</html>