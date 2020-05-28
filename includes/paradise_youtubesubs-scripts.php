<?php
  // Add Scripts
  function pyts_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('yts-main-style', plugins_url(). '/paradise_youtubesubs/css/style.css');
    // Add Main JS
    wp_enqueue_script('yts-main-script', plugins_url(). '/paradise_youtubesubs/js/main.js');

    // Add Google Script
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
  }

  add_action('wp_enqueue_scripts', 'pyts_add_scripts');