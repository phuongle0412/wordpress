<?php
/**
 * The header for home page.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">

@font-face {
	font-weight: normal;
	font-style: normal;
	font-family: 'feathericons';
	src:url('../fonts/feathericons/feathericons.eot?-8is7zf');
	src:url('../fonts/feathericons/feathericons.eot?#iefix-8is7zf') format('embedded-opentype'),
		url('../fonts/feathericons/feathericons.woff?-8is7zf') format('woff'),
		url('../fonts/feathericons/feathericons.ttf?-8is7zf') format('truetype'),
		url('../fonts/feathericons/feathericons.svg?-8is7zf#feathericons') format('svg');
}

.grid {
	position: relative;
	margin: 0 auto;
	padding: 1em 0 4em;
	max-width: 1000px;
	list-style: none;
	text-align: center;
}

/* Common style */
.grid figure {
	position: relative;
	float: left;
	overflow: hidden;
	margin: 10px 1%;
	min-width: 320px;
	max-width: 380px;
	max-height: 580px;
	width: 48%;
	background: #3085a3;
	text-align: center;
	cursor: pointer;
}

.grid figure img {
	position: relative;
	display: block;
	min-height: 100%;
	max-width: 100%;
	opacity: 0.8;
}

.grid figure figcaption {
	padding: 2em;
	color: #fff;
	text-transform: uppercase;
	font-size: 1em;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
	pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
	z-index: 1000;
	text-indent: 200%;
	white-space: nowrap;
	font-size: 0;
	opacity: 0;
}

.grid figure h2 {
	word-spacing: -0.15em;
	font-weight: 300;
}

.grid figure h2 span {
	font-weight: 800;
}

.grid figure h2,
.grid figure p {
	margin: 0;
}

.grid figure p {
	letter-spacing: 1px;
	font-size: 68.5%;
}

    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
	
	figure.effect-roxy {
		background: -webkit-linear-gradient(45deg, #ff89e9 0%, #05abe0 100%);
		background: linear-gradient(45deg, #ff89e9 0%,#05abe0 100%);
	}

	figure.effect-roxy img {
		max-width: none;
		width: -webkit-calc(100% + 60px);
		width: calc(100% + 60px);
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
		-webkit-transform: translate3d(-50px,0,0);
		transform: translate3d(-50px,0,0);
	}

	figure.effect-roxy figcaption::before {
		position: absolute;
		top: 30px;
		right: 30px;
		bottom: 30px;
		left: 30px;
		border: 1px solid #fff;
		content: '';
		opacity: 0;
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
		-webkit-transform: translate3d(-20px,0,0);
		transform: translate3d(-20px,0,0);
	}

	figure.effect-roxy figcaption {
		padding: 3em;
		text-align: left;
	}

	figure.effect-roxy h2 {
		padding: 30% 0 10px 0;
	}

	figure.effect-roxy p {
		opacity: 0;
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
		-webkit-transform: translate3d(-10px,0,0);
		transform: translate3d(-10px,0,0);
	}

	figure.effect-roxy:hover img {
		opacity: 0.7;
		-webkit-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
	}

	figure.effect-roxy:hover figcaption::before,
	figure.effect-roxy:hover p {
		opacity: 1;
		-webkit-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
	}
	
	
</style>
</head>
<body <?php body_class(); ?>>
<?php if(is_home()){$wrap_class = "home-site";}else{$wrap_class = "site";}?>
<div class="<?php echo $wrap_class;?>">
	<header class="home-header">
		<div class="home-logo onetone-logo ">
        	<a href="<?php echo esc_url(home_url('/')); ?>">
        <?php if ( onetone_options_array('logo')!="") { ?>
        <img src="<?php echo onetone_options_array('logo'); ?>" alt="<?php bloginfo('name'); ?>" />
        <?php }else{ ?>
        <span class="site-name">
        <?php bloginfo('name'); ?>
        </span>
        <?php }?>
        </a>
        <?php if ( 'blank' != get_header_textcolor() && '' != get_header_textcolor() ){?>
        <div class="site-description "><?php bloginfo('description'); ?></div>
        <?php }?>
        </div>
        
        <a class="home-navbar navbar" href="javascript:;"></a>
        <nav class="home-navigation top-nav">
<?php

 $onepage_menu = '';
 $section_num = onetone_options_array( 'section_num' ); 
 if(isset($section_num) && is_numeric($section_num ) && $section_num >0):
 for( $i = 0; $i < $section_num ;$i++){

 $section_menu = onetone_options_array( 'menu_title_'.$i );
 $section_slug = onetone_options_array( 'menu_slug_'.$i );

 if(isset($section_menu) && $section_menu !=""){
 $sanitize_title = sanitize_title($section_menu);
 $section_menu = onetone_options_array( 'menu_title_'.$i );
 if(trim($section_slug) !=""){
	 $sanitize_title = $section_slug; 
	 }
 $onepage_menu .= '<li  class="onetone-menuitem"><a id="onetone-'.$sanitize_title.'" href="#'.$sanitize_title.'" >
 <span>'.$section_menu.'</span></a></li>';
 }
 }
endif;
if ( has_nav_menu( "home_menu" ) ) {
 wp_nav_menu(array('theme_location'=>'home_menu','depth'=>0,'fallback_cb' =>false,'container'=>'','container_class'=>'main-menu','menu_id'=>'menu-main','menu_class'=>'main-nav','link_before' => '<span>', 'link_after' => '</span>','items_wrap'=> '<ul id="%1$s" class="%2$s">'.$onepage_menu.'%3$s</ul>'));
}
else{
echo '<ul>'.$onepage_menu.'</ul>';
}
?>
        </nav>
		<div class="clear"></div>
	</header>    
	<!--header-->