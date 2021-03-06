<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ekogito_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta property="fb:pages" content="227429627598229" />
<meta name="google-site-verification" content="9zcZW3HSSMZ_zmyzu7sPk0QouoNNqdSIjM-8wfWDjSk" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb8GnWDx_F9GNWUerSkEmIuyihKrP_RPI"></script>
<link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Cabin+Sketch:400,700|Fredericka+the+Great|Open+Sans+Condensed:300,300i|Open+Sans:300,300i" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1166022093464728";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="site ">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ekogito' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

    <div class="uk-animation-fade sticky-navbar" data-uk-sticky="{animation: 'uk-animation-fade',target:'#tm-main', clsinactive:'uk-sticky-no-active', clsactive:'uk-active' }" style="padding: 30px 0 30px 0;">
        <div class="tm-navbar tm-navbar-overlay tm-navbar-transparent tm-navbar-contrast">
            <div class="uk-container uk-container-center">

                <nav class="uk-navbar">

                    <a class="uk-navbar-brand website-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        
											<img class="uk-margin uk-margin-remove" src="https://www.ekogito.co/wp-content/uploads/ekogito-logo-site-new.png" width="auto" height="35" title="Ekogito.co" alt="Ekogito.co" scale="0" style="margin-top: -10px !important;height:35px;width:auto;">
                    </a>

                    <div class="uk-navbar-flip uk-hidden-small uk-contrast">
                     
                            <?php
                			wp_nav_menu( array(
                				'menu'              => 'primary',
                				'theme_location'    => 'primary',
                				'depth'             => 2,
                				'container'         => 'uk-navbar-nav',
                				'menu_class'        => 'uk-navbar-nav',
                				'fallback_cb'       => 'basey_primary_menu::fallback',
                				'walker'            => new basey_primary_menu())
                			);
                			?>	 
                			<a class="uk-navbar-brand social-ico" href="https://www.facebook.com/ekogito.co" target="_blank" rel="Facebook Ekogito">
                                <i class="uk-icon-justify uk-icon-facebook"></i>
                            </a> 
                            <a class="uk-navbar-brand social-ico" href="https://twitter.com/ekogito" target="_blank" rel="Twitter Ekogito">
                                <i class="uk-icon-justify uk-icon-twitter"></i>
                            </a> 


                    </div>

                    <div class="uk-navbar-flip uk-visible-small">
                        <a href="#offcanvas" class="uk-navbar-toggle uk-contrast" data-uk-offcanvas=""></a>
                    </div>

                </nav>

            </div>
        </div>
    </div>

	</header><!-- #masthead -->
	


	<div id="content" class="site-content">
