<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<section class="sec_portfolio white_area">

        	

        	<div class="container">

            	<div class="blog_main">

                	<div class="row">

                    	<div class="col-md-12 animated"data-animdelay="0.4s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInLeft">

	

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="blog_post">

<div class="post_image"><?php the_post_thumbnail('thumbnail'); ?>

                                          


	

		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>

	

		<?php

			endif;



			if ( is_single() ) :

				the_title( '<h4>', '</h4>' );

			else :

				the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );

			endif;

		?>

                                    </div>	

	<?php if ( is_search() ) : ?>

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<?php else : ?>

	

		<?php

			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );

			wp_link_pages( array(

				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',

				'after'       => '</div>',

				'link_before' => '<span>',

				'link_after'  => '</span>',

			) );

		?>



	<?php endif; ?>



	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>

</div>


                            <?php endwhile; ?>

	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>

	<?php else: ?>

	<?php endif; ?>
		      </div>

                    	                   



                    </div>

                </div>

            </div>

        </section>

<?php 
get_footer();
