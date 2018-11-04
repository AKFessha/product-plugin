<?php
/*
Plugin Name: product-plugin
Plugin URI: https://wordpress.org/plugins/health-check/
Description: display products and add products to table
Version: 0.1.0
Author: Awet fessha
Author URI: http://health-check-team.example.com
Text Domain: product-plugin
Domain Path: /languages
*/

//your code goes here
add_action('wp_head', function(){
    echo '<script> alert("Welcome to my site!")</script>';
});


