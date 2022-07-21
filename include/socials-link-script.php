<?php

function add_scripts_plugin(){
    wp_enqueue_style('socials-link-css' ,  plugins_url().'/assets/css/style.css');
    wp_enqueue_script('socials-link-js' ,  plugins_url().'/assets/js/main.js');
}

add_action('wp_enqueue_scripts' , 'add_scripts_plugin' );




?>