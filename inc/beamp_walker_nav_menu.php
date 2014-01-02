<?php
/**
 * The beamp theme functions file.
 *
 * @version 1.0
 * @package Beamp
 * @author Jong-Ha Ahn <jongha.ahn@mrlatte.net>
 * @link https://github.com/jongha/wordpress-beamp
 * @since Beamp 1.0
 */

class beamp_walker_nav_menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth ) {
        // depth dependent classes
        $display_depth = ( $depth + 1 ); // because it counts the first submenu as 0
        $class_names = $depth >= 0 ? 'dropdown-menu' : 'nav navbar-nav';

        // build html
        $output .= '<ul class="' . $class_names . '">';
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $item, $depth, $args ) {
        global $wp_query;

        // build html
        if( in_array('menu-item-has-children', $item->classes) ) {
            $output .= sprintf(
                '<li id="nav-menu-item-%1$s" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">%2$s <b class="caret"></b></a>',
                $item->ID,
                $item->title
            );

        }else {
            $output .=  '<li id="nav-menu-item-'. $item->ID . '">';

            // link attributes
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

            $item_output = sprintf(
                '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters( 'the_title', $item->title, $item->ID ),
                $args->link_after,
                $args->after
            );

            // build html
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }
}
?>
