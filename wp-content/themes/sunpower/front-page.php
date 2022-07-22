<?php

/*
Template Name: front-page

 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sunpower
 */

get_header();
?>

<main id="primary" class="site-main">
<div class="container">
        <div class='row'>
            <?php
                dynamic_sidebar('hc-colab');
            ?>
        </div>
    </div>

<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		
?>
</div>
<div id="mapid" style="height: 450px">
</div>
</main><!-- #main -->

<?php
dynamic_sidebar('hc-colab');
get_footer();
?>