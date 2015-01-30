<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('404'); ?>

   <div class="start_claim_wrapper">

        	<div class="container">
            <div class="col-md-12">
			<?php if ( have_posts() ) : ?>

		
				<h4><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h4>
			

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next post navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
           
</div>
     

            </div>

        </div>

<?php get_footer();
