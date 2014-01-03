<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @version 1.0
 * @package Beamp
 * @author Jong-Ha Ahn <jongha.ahn@mrlatte.net>
 * @link https://github.com/jongha/wordpress-beamp
 * @since Beamp 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="ie7 ielt9 ielt10"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="ie8 ielt9 ielt10"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="ie9 ielt10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
			</div>
			<?php
                wp_nav_menu(
				    array(
				        'container'		 => 'div',
				        'container_class'   => 'navbar-collapse collapse navbar-left',
				        'menu_class'		=> 'nav navbar-nav',
				        'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
				        'walker'			=> new beamp_walker_nav_menu
				    )
			    );
			?>

			<!-- search form -->
			<div class="navbar-right"><?php get_search_form(); ?></div>
		</div>
	</div>
	<div id="main" class="container">