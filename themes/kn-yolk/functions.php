<?php

/**
 * Functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package FSE
 * @since 0.1.0
 */

 /**
  * Enqueue the style.css file
  *
  * @since 0.1.0
  */

  function knYolk_styles() {
      wp_enqueue_style(
          'knYolk-style',
          get_stylesheet_uri(),
          wp_get_theme()->get('Version')
      );
  }

  if(! function_exists('knYolk_setup')) {
      function knYolk_setup() {
          add_theme_support('wp-block-styles');
      } 
  }

  add_action( 'wp_enqueue_scripts', 'knYolk-styles' );
  add_action( 'after_setup_theme', 'knYolk_setup');