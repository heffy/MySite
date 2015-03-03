<?php 

define('BASE', get_bloginfo('stylesheet_directory'));
define('IMAGES', BASE. "/images");
define('SCRIPT', BASE. "/script");
define('CSS', BASE. "/css");


//add support for custom nav menus
add_theme_support( 'nav-menus' );
    if(function_exists('register_nav_menus')){
        
        register_nav_menus(
            array(
                'main' => 'Main Nav'
            )
        );
        
    }



?>