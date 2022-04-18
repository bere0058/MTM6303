<?php
/**
 * The header for MTM6303_Final
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico" rel="icon">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.a3f694c0.css" rel="stylesheet">
  <?php wp_head(); mtm6303final_enqueue_my_custom_styles(); mtm6303finalplugin_enqueue_my_custom_styles(); ?>
  <title><?php the_title(); ?></title>   
</head>

<body>

 <!-- Add your content of header -->
<header>
    <nav class="navbar  navbar-fixed-top navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.html" title="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <?php
          wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container' => 'ul', 
            'menu_class' => 'nav navbar-nav navbar-right'
            ) );
        ?>
        </div>
      </div>
    </nav>
  </header>