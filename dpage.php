<?php

/**

 * Template Name: Single Page

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

          


<section class="sec_portfolio white_area">

        	

        	<div class="container">

            	<div class="blog_main">

                	<div class="row">

                    	<div class="col-md-12 animated"data-animdelay="0.4s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInLeft">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        	<div class="blog_post_left">

                            	<div class="blog_post">

                                

                                    <?php the_content(); ?>

                                

                                </div>

                                  

                               

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
