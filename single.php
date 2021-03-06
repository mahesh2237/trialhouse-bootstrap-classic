<?php get_header(); ?>

<div id="content" class="row">

	<div id="main" class="<?php trialhouse_boostrap_main_classes(); ?>" role="main">

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<?php trialhouse_boostrap_display_post(false); ?>
		
		<?php trialhouse_boostrap_post_pagination(); ?>
		<?php
		if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>	
			
		<?php endwhile; ?>	
		
		
		
		<?php else : ?>
		
		<article id="post-not-found" class="block">
		    <p><?php _e("No posts found.", "trialhouse-bootstrap-classic"); ?></p>
		</article>
		
		<?php endif; ?>

	</div>

	<?php get_sidebar("left"); ?>
	<?php get_sidebar("right"); ?>

</div>

<?php get_footer(); ?>
