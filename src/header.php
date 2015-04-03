<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 * 
 * @package oats
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
      <?php wp_title('|', true, 'right'); ?>
      Oats By Day
    </title>
    
    <?php wp_head(); ?>
  </head>

  <header>
    <div class="top-bar">
      <a class="logo" href="/"><?php bloginfo('name'); ?></a>
    </div>
  </header>
  
  <body <?php body_class(); ?>>
      <div class="flex">
          <?php get_sidebar(); ?>
          <div class="content">
        
