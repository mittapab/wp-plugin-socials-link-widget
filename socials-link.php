<?php  
/**
 * Plugin Name: WP-PLUGIN-SOCIALS-LINK-WIDGET
 * Description: Show widget socials link
 * Author: Mr Mittapab Tiawsenghuad
 * Version: 1.0.0
 */


 if(!defined('ABSPATH')) exit;
// Load Scripts
 require_once(plugin_dir_path(__FILE__).'/include/socials-link-script.php');

// Load Class
 require_once(plugin_dir_path(__FILE__) . '/include/socials-link-widget.php');

 // Resgister widget

 function register_socials_link_widget(){
    register_widget('Socials_Link_Widget');
 }

 add_action('widgets_init' , 'register_socials_link_widget');


?>