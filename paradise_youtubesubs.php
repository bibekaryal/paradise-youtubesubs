<?php
/*
Plugin Name: Paradise Nepal Youtube Subs
Description: Display YouTube sub button and count
Version: 1.0.0
Author: Bibek Aryal
Author URI: https://homea.sgedu.site/colibri-wp/
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/paradise_youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/paradise_youtubesubs-class.php');

// Register Widget
function register_paradise_youtubesubs(){
  register_widget('Paradise_Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'register_paradise_youtubesubs');