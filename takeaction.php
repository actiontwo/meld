<?php
/**
 * Template Name: Take Action Page
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
    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1400855669567" id="page-53141c2be4b0e36de29902a5">
      <div class="row sqs-row">
        <div class="col sqs-col-12 span-12">
          <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-c9a2891a6112ec0cdf9c">
            <div class="sqs-block-content">
            <?php the_field('column_1'); ?>
             
            </div>
          </div>
          <div class="row sqs-row">
            <div class="col sqs-col-6 span-6">
              <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-0268f290d93beffc0f0d">
                <div class="sqs-block-content">
                <?php the_field('column_2'); ?>
                  
                </div>
              </div>
            </div>
            <div class="col sqs-col-6 span-6">
              <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-986db30affe99d23bf3f">
                <div class="sqs-block-content">
                <?php the_field('column_3'); ?>
                  
                </div>
              </div>
            </div>
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

