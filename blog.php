<?php

/**

 * Template Name: Blog Page

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */



get_header(); ?>





     <div class="container">

        	<div class="header_text">

            <?php the_field('banner_text'); ?>

            	

            </div>

        </div>

    </header>



<div id="promotedGalleryWrapper" class="sqs-layout promoted-gallery-wrapper">

  <div class="row">

    <div class="col"></div>

  </div>

</div>

    

    	<!-- ===== Start Portfolio ===== -->

        <section class="sec_portfolio">

        	<div class="container">

            	<div class="blog_main">

                	<div class="row">

                    	<div class="col-md-8">

                        	<div class="row">

                            

                            

          

                            

                            	<!-- Blog Main Post Category 1 -->

                            	<div class="col-md-4">

                                

                                

                                   <?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'category_name' => 'Investment School',
    'posts_per_page' => 2,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>

                                	<div class="blog_post_left">

                                        <div class="blog_post">

                                            <h2><?php the_title(); ?></h2>

                                            <h6><?php echo get_the_date(); ?></h6>

                                            <div class="post_image">

                                                <?php the_post_thumbnail('full'); ?>

                                            </div>

                                            <?php echo content(10); ?>

                                            <a href="<?php the_permalink(); ?>" class="read_more_blog">Read More</a>

                                        </div>

                                    </div>       

                           <?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
   <div class="pagination">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
    </div>
    <?php  ?>
   </div>
<?php } ?>

<?php else: ?><?php endif; ?>

                                

                                </div>

                                <!-- End Blog Post Category 1 -->

                         

                                

                                

                            

                            

                            

                            

                            	<!-- Blog Main Post Category 2 -->

                            	<div class="col-md-4">

                          <?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'category_name' => 'Institutional Plan School',
    'posts_per_page' => 2,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>

                                	<div class="blog_post_left">

                                        <div class="blog_post">

                                            <h2><?php the_title(); ?></h2>

                                            <h6><?php echo get_the_date(); ?></h6>

                                            <div class="post_image">

                                                <?php the_post_thumbnail('full'); ?>

                                            </div>

                                            <?php echo content(10); ?>

                                            <a href="<?php the_permalink(); ?>" class="read_more_blog">Read More</a>

                                        </div>

                                    </div>       

                           <?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
   <div class="pagination">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
    </div>
    <?php  ?>
   </div>
<?php } ?>

<?php else: ?><?php endif; ?>
                            

                                </div>

                                <!-- End Blog Post Category 2 -->

                              

                            

                            

                            

                            

                           

                            	<!-- Blog Main Post Category 3 -->

                            	<div class="col-md-4"> 
                                
                                
                                   <?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'category_name' => 'Financial Planning School',
    'posts_per_page' => 2,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>

                                	<div class="blog_post_left">

                                        <div class="blog_post">

                                            <h2><?php the_title(); ?></h2>

                                            <h6><?php echo get_the_date(); ?></h6>

                                            <div class="post_image">

                                                <?php the_post_thumbnail('full'); ?>

                                            </div>

                                            <?php echo content(10); ?>

                                            <a href="<?php the_permalink(); ?>" class="read_more_blog">Read More</a>

                                        </div>

                                    </div>       

                           <?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
   <div class="pagination">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
    </div>
    <?php  ?>
   </div>
<?php } ?>

<?php else: ?><?php endif; ?>
                                </div>

                                <!-- End Blog Post Category 3 -->

                                

                           



                            </div>

                        </div>

                        

                        

                    	<?php get_sidebar(); ?>

                        

                        

                        

                    </div>

                </div>

            </div>

        </section>

        <!-- ===== End Portfolio ===== -->













<?php 

get_footer();

