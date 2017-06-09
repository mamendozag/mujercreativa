<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/*******************************************************************************************/

include 'fonts.php';

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// General Configuration Parameters

$tmpl_style				= 'style.default.css';

$body_font_family 		= $this->params->get('body_font_family');
$bodyfont_arr			= array('fontlink'=>false, 'fontfamily'=>false);
$bodyfont_arr			= fontChooser($body_font_family);
$body_font_family 		= $bodyfont_arr['fontfamily'];

$hfont_family 			= $this->params->get('hfont_family');
$hfont_arr				= array('fontlink'=>false, 'fontfamily'=>false);
$hfont_arr				= fontChooser($hfont_family);
$hfont_family 			= $hfont_arr['fontfamily'];

$body_font_size 		= 'font-size: ' . $this->params->get('body_font_size') . 'px;';

	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Logo Configuration Parameters

$logo_type 			= $this->params->get('logo_type');

$logo_txt 			= '';
if($this->params->get('logo_txt'))
	$logo_txt 		= $this->params->get('logo_txt');
	

?>

