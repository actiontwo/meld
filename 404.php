<?php
/**
 * Template Name: 404 Page
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('404'); ?>


<div id="promotedGalleryWrapper" class="sqs-layout promoted-gallery-wrapper">
  <div class="row">
    <div class="col"></div>
  </div>
</div>
<main id="page" role="main"> 
 <div id="content" class="main-content" data-content-field="main-content">
    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1402060051695" id="page-5390fc96e4b0b156e799a19c">
      <div class="row sqs-row">
        <div class="col sqs-col-12 span-12">
          <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-187a4a8a8b1dd5c5c96e">
          

				<h1><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
			
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

				<?php get_search_form(); ?>
			

	       </div>
        </div>
      </div>
    </div>
  </div>
  </main>
<?php get_footer();
