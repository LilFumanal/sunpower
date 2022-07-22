  
<?php
/*
Template Name: partners
*/
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		get_sidebar();
		?>

	</main><!-- #main -->

<?php
get_footer();