<?php
/*
*
* the functions file
*
*/

/* menu */

function register_my_menus() {
  register_nav_menus(
    array(
        'aside-left-menu' => __( 'Menu principal gauche' ),
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
