<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sunpower
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sunpower'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding bg-light d-flex justify-content-between align-items-center">
				<div class="mx-2">
					<?php
					the_custom_logo();
					?>
				</div>

				<nav class="navbar navbar-expand-md navbar-light mx-4" role="navigation">
					<div class="container">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<?php
						wp_nav_menu(array(
							'theme_location'    => 'header_menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'header-menu',
							'menu_class'        => 'nav navbar-nav h5 here',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
						?>
					</div>
				</nav><!-- #site-navigation -->
			</div><!-- .site-branding -->
		</header><!-- #masthead -->