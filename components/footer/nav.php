<?php
/**
 * Footer nav 
 * 
 * @author Andrea Musso
 * 
 * @package Foundry
 */

if ( has_nav_menu( 'footermenu' ) ) :
    wp_nav_menu([
        'theme_location'    => 'footermenu',
        'menu_id'           => 'footerNav',
        'container'         => 'nav',
        'container_class'   => 'site-footer__nav',
        'depth'             => 1
    ]);
endif;
