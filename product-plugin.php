<?php
/*
Plugin Name: product-plugin
Plugin URI: https://github.com/AKFessha/product-plugin
Description: Display products and add products to table
Version: 0.1.0
Author: Awet Fessha
Author URI: https://github.com/AKFessha/product-plugin
Text Domain: product-plugin
Domain Path: /languages
*/

//your code goes here
add_action('wp_head', function(){
    echo '<script> alert("Welcome to my site!")</script>';
});


