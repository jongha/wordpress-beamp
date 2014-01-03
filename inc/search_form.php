<?php
/**
 * The Walker Nav Menu
 *
 * @version 1.0
 * @package Beamp
 * @author Jong-Ha Ahn <jongha.ahn@mrlatte.net>
 * @link https://github.com/jongha/wordpress-beamp
 * @since Beamp 1.0
 */

function search_form( $form ) {
    $form = '<form id="searchform" class="navbar-form" method="get" role="search" action="' . home_url( '/' ) . '" >
    <div class="form-group">
    <input type="text" placeholder="' . __( 'Search for:' ) . '" class="form-control" name="s" id="s" value="' . get_search_query() . '">
    </div>
    <button type="submit" class="btn btn-success" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'">' . __( 'Search' ) . '</button>
    </form>';

    return $form;
}
?>
