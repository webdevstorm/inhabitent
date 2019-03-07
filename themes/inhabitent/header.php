<?php
/**
* The header for our theme.
*
* @package RED_Starter_Theme
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
     <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

 <body <?php body_class(); ?>>
  <div id="page" class="hfeed site"></div>
   <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
<header id="masthead" class="site-header" role="banner">
    <div class="wrapper">
     <div class="site-branding">
      <h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      </div>
       <div class="front-tent-image"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-tent.svg'?>" alt="white inhabitent tent logo"></a></div>
  <nav id="site-navigation" class="main-navigation" role="navigation">
     <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      <div class ="search">
        <?php get_search_form();?>
         </div>
           </nav>
             </div>
          </header>
<div id="content" class="site-content">


