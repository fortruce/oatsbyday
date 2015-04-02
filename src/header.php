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
      <?php wp_title('|', true, 'right'); ?>
      Oats By Day
    </title>
    <?php wp_head(); ?>
  </head>

  <header>
  </header>
  <body>
    <div id="content">
