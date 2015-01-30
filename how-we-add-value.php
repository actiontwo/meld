<?php
/**
 * Template Name: How We Add Value Page
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
<main id="page" role="main"> 
  
  <!-- comment the linebreak between these two elements because science
        --><!-- comment the linebreak between these two elements because science
        --><!-- comment the linebreak between these two elements because science
        -->
  <div id="content" class="main-content" data-content-field="main-content">
    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1402060051695" id="page-5390fc96e4b0b156e799a19c">
      <div class="row sqs-row">
        <div class="col sqs-col-12 span-12">
          <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-187a4a8a8b1dd5c5c96e">
          
          		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="sqs-block-content">
              
              <?php the_content(); ?>
            </div>
            
            
    <?php endwhile; ?>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php else: ?>
	<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- comment the linebreak between these two elements because science
        --> 
  
</main>
<?php 
get_footer();

