<?php
/*
* divers trucs
*/

/* custom logo */
add_theme_support( 'custom-logo' );

function custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );


/* menu */

function register_my_menus() {
  register_nav_menus(
    array(
        'gauche-menu' => __( 'Menu gauche' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* on mets toutes les images en responsive */
function img_responsive($content){
    return str_replace('<img class="','<img class="pure-img ',$content);
}
add_filter('the_content','img_responsive');
