<?php

/**
 * Theme filters.
 */

namespace App;

use App\View\Composers\Post;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('wp_nav_menu_objects', function($nav_menu_objects){
    foreach($nav_menu_objects as &$nav_menu_object) {
        $nav_menu_object->classes[] = 'nav-item';
        if($nav_menu_object->current) {
            $nav_menu_object->classes[] = 'active';
        }
    }
    return $nav_menu_objects;
});

add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
        if($item->current){
            $atts['class'] .= ' active';
        }
    }
    return $atts;
}, 20, 3 );

