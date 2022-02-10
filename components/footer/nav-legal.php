<?php
/**
 * Footer nav 
 * 
 * @author Andrea Musso
 * 
 * @package Foundry
 */

if ( has_nav_menu( 'legalmenu' ) ) :
    wp_nav_menu([
        'theme_location'    => 'legalmenu',
        'menu_id'           => 'legalNav',
        'container'         => 'nav',
        'container_class'   => 'site-footer__legal-nav',
        'depth'             => 1
    ]);
endif;
