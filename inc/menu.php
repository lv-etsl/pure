<?php
/*
*
* le fichier menu ( peut être inclus dans header.phè pour version deéfinitive)
*
*/
?>
<!-- Menu toggle -->
<a href="#menu" id="menuLink" class="menu-link">
    <!-- Hamburger icon -->
    <span></span>
</a>

<div id="menu">
    <?php
     wp_nav_menu( array(
       'theme_location' => 'gauche-menu',
       'container' => 'div',
       'menu_class' => 'pure-menu',
       'menu_id' => 'hello',
       'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',

    ) ); ?>
</div>
