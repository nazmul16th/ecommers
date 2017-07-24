<?php 
/*  Start register all menues                */
register_nav_menu('main-menu','Main menu');
register_nav_menu('second-menu','second menu');
register_nav_menu('side_menu','side menu');


/*  End register all menues                */

add_image_size('slider', 1024, 360, true);

/*  Thumbnail support                */
add_theme_support('post-thumbnails');

add_theme_support('post-thumbnails');
/*  Custom post Data                */
function awesome_post_type(){
register_post_type(
'eshoper_slider',
array(
'labels'=> array(
'name' => 'Sliders',
'singular_name' => 'Slider'
),
'public' =>  true,
'show_in_menu' => true,
'supports' => array(
'title','editor','excerpt','custom-fields','thumbnail'
)
)

);
//Another post type
register_post_type(
'anotherslider',
array(
'labels'=> array(
'name' => 'Sliders',
'singular_name' => 'Slider'
),
'public' =>  true,
'show_in_menu' => true,
'supports' => array(
'title','editor','excerpt','custom-fields','thumbnail'
)
)

);


}
add_action('init','awesome_post_type');

function awesome_script_enqueue(){
//=================================Add CSS and JS File==============================================//
wp_enqueue_style('customstyle',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0.0', 'all');
wp_enqueue_style('prettyPhoto',get_template_directory_uri().'/css/prettyPhoto.css',array(),'1.0.0', 'all');
wp_enqueue_style('price-range',get_template_directory_uri().'/css/price-range.css',array(),'1.0.0', 'all');
wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css',array(),'1.0.0', 'all');
wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.0.0', 'all');
wp_enqueue_style('main',get_template_directory_uri().'/css/main.css',array(),'1.0.0', 'all');    

    
wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', array(), '1.0.0', true);
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0.0', true);
wp_enqueue_script('scrollUp', get_template_directory_uri().'/js/jquery.scrollUp.min.js', array(), '1.0.0', true);
wp_enqueue_script('price-range', get_template_directory_uri().'/js/price-range.js', array(), '1.0.0', true);
wp_enqueue_script('prettyPhoto', get_template_directory_uri().'/js/jquery.prettyPhoto.js', array(), '1.0.0', true);
wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', array(), '1.0.0', true);
    


}

//to active function call 

add_action('wp_enqueue_scripts','awesome_script_enqueue');