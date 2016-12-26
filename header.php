<!doctype html>  

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>

	<div id="content-wrapper">

		<header>
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
		  
					<div class="navbar-header">
						<?php if (has_nav_menu("main_nav")): ?>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-responsive-collapse">
		    				<span class="sr-only"><?php _e('Navigation', 'trialhouse-bootstrap-classic'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php endif ?>
						
							<?php if( get_header_image() != '' ) : ?>
							  <div id="logo">
						        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
					         </div><!-- end of #logo -->
					        <?php endif; // header image was removed ?>
                            
                            
                            <?php if( !get_header_image() ) : ?>
 					           <div id="logo">
						           <span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
					           </div><!-- end of #logo -->
                            <?php endif; ?>
					</div>

					<?php if (has_nav_menu("primary")): ?>
					<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
						<?php
						    trialhouse_bootstrap_display_main_menu();
						?>

					</div>
					<?php endif ?>

				</div>
			</nav>
		</header>
		
		<div id="page-content">
			<div class="container">
