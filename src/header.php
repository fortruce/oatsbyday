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
    <title>
      <?php if (is_singular()) { echo the_title() . ' | '; }?>
      Oats By Day
    </title>
    <?php wp_head(); ?>
  </head>

  <header>
  </header>
  <body>
    <div id="content">
