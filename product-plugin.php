<?php
/*
Plugin Name: product-plugin
Plugin URI: https://github.com/AKFessha/product-plugin
Description: Display products and add products to table
Version: 0.1.0
Author: Awet Fessha
Author URI: https://github.com/AKFessha/product-plugin
License: GPL version 2 or any later version
Text Domain: product-plugin
Domain Path: /languages
*/

//your code goes here

//protect from security valunerability
/* if(!defined("ABSPATH")){
    die;
    }
   if(function_exists("add_action")){
      echo "You silly human , you can't access this file!";
     exit;
    }
*/
defined('ABSPATH') or die("You silly human , you can't access this file!");

// class ProductPlugin
// {
//     //activation
//     function activate(){
//     //generate a CPT
//     //flush rewrite rules
    
//     }

//     //deactivation
//     function deactivate(){
//     ////flush rewrite rules

//     }
//     //uninstall
//     function uninstall(){

//     //delete CPT
//     // delete all the plugin data from DB
//     }

// }

// if(class_exists("ProductPlugin")){
//     $productPlugin = new ProductPlugin();
// }

// //activation
// register_activation_hook(__FILE__, array($productPlugin, "activate"));
// //deactivation
// register_deactivation_hook(__FILE__, array($productPlugin, "deactivate"));
// //uninstall


add_action('init', function () {
    register_post_type('products', [
        'labels' => [
            'name' => __('Products'),
            'singular_name' => __('Product'),
           
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
    ]);

});

