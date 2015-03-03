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

//Add Post Thumbnails
add_theme_support('post-thumbnails');
add_image_size('blog-post-thumb',340,200,true);





function new_excerpt_more($more){
    
    global $post;
    
    return '<a href="'  .get_permalink($post->ID) .'" class="moreTag"> More..</a>';
    
}

add_filter('excerpt_more', 'new_excerpt_more');



?>