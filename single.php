<?php



/**



 * The Template for displaying all single posts



 *



 * @package WordPress



 * @subpackage Twenty_Fourteen



 * @since Twenty Fourteen 1.0



 */







get_header('blog'); ?>











		

<section class="sec_portfolio white_area">

        	

        	<div class="container">

            	<div class="blog_main">

                	<div class="row">

                    	<div class="col-md-8 animated"data-animdelay="0.4s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInLeft">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        	<div class="blog_post_left">

                            	<div class="blog_post">

                                	<h2><?php the_title();?></h2>

                                    <h6><?php echo get_the_date(); ?></h6>


                                    <?php the_content(); ?>

                                

                                </div>

                                  

                               

                            </div>

                            

                            

                            <?php endwhile; ?>

	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>

	<?php else: ?>

	<?php endif; ?>

                        </div>

                    	                        <?php get_sidebar(); ?>



                    </div>

                </div>

            </div>

        </section>









<?php



get_footer();



