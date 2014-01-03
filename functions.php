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

if( !function_exists( 'beamp_setup' ) ):
    function beamp_setup() {

        @require_once( get_template_directory() . '/inc/walker_nav_menu.php' );
        @require_once( get_template_directory() . '/inc/search_form.php' );
        
        add_filter( 'show_admin_bar', '__return_false' );
        add_filter( 'get_search_form', 'search_form' );
        
        register_nav_menu( 'primary', __( 'Navigation Menu', 'beamp' ) );

    }
    
endif;
add_action( 'after_setup_theme', 'beamp_setup' );
?>