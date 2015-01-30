<?php

/**

 * Template Name: Video Page

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


  

  <main id="page" role="main"> 

    

    <div id="content" class="main-content" data-content-field="main-content">

      <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1402059860831" id="page-530e9b23e4b08f75da824756">

        <div class="row sqs-row">

          <div class="col sqs-col-12 span-12">

            <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-8705cc98d33d2e28d00e">
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            

              <div class="sqs-block-content">

                <h1><?php the_title();?></h1>
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

   
  </main>





<?php 

get_footer();

