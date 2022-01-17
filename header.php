<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ispirt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/foundation.min.css">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,600|Poppins:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="top-navigation">
			<a href="<?php echo	get_site_url(); ?>">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri();?>/img/policyhacks.svg" alt="site-logo">
				</div>
			</a>
			<div id="hamburger">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="the-navigation">
				<nav>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'		=>	'top_menu'
						) );
					?>
				</nav>
			</div>

		</div>
