<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

?>



<div id="preFooter">

  <div class="pre-footer-inner">

    <div class="sqs-layout sqs-grid-12 columns-12" data-layout-label="Pre-Footer Content" data-type="block-field" data-updated-on="1402023097590" id="preFooterBlocks">

      <div class="row sqs-row">

        <div class="col sqs-col-12 span-12">

          <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-yui_3_16_0_1_1402020113263_42347">

            <div class="sqs-block-content">

              <?php /*?><p class="text-align-center"><a href="http://www.melduniversity.com/about-us/">Who We Are</a> &nbsp; &nbsp; <a href="http://www.melduniversity.com/overview/">What We Do</a> &nbsp; &nbsp; <a href="http://www.melduniversity.com/clients/">Who We Work For</a> &nbsp; &nbsp; <a href="http://www.melduniversity.com/how-we-charge/">How We Charge</a> &nbsp; &nbsp; <a href="http://www.melduniversity.com/value/">How We Add Value</a> &nbsp; &nbsp; <a href="http://melduniversity.com/take-action/">Take Action</a></p><?php */?>

              

              	<p class="social_icons">

                	<a href="https://plus.google.com/103148208500542043477/about" target="_blank"><i class="fa fa-google-plus"></i></a>

                	<a href="https://twitter.com/meldfinancial" target="_blank"><i class="fa fa-twitter"></i></a>

                	<a href="https://www.facebook.com/MeldFinancial" target="_blank"><i class="fa fa-facebook"></i></a>

                	<a href="https://www.youtube.com/user/meldfinancial" target="_blank"><i class="fa fa-youtube"></i></a>

                	<a href="https://www.linkedin.com/company/meld-financial" target="_blank"><i class="fa fa-linkedin"></i></a>

              	</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<footer id="footer" role="contentinfo">

<div class="footer-inner">

<div class="nav-wrapper back-to-top-nav">

  <nav>

    <div class="back-to-top"><a href="#header">Back to Top</a></div>

  </nav>

</div>





<div id="siteInfo"><span class="site-address">Meld Financial, 3008 Pump House Road, Birmingham, AL 35243</span><span rel="tel" class="site-phone">205.967.4200</span><a href="mailto:meld@meldfinancial.com" class="site-email"><span>meld@meldfinancial.com</span></a></div>

<div class="sqs-layout sqs-grid-12 columns-12" data-layout-label="Footer Content" data-type="block-field" data-updated-on="1402022734344" id="footerBlocks">

  <div class="row sqs-row">

    <div class="col sqs-col-12 span-12">

      <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-61d55973e4da458adf19">

        <div class="sqs-block-content">

          <p class="text-align-center"><em>Securities offered through Triad Advisors, Inc., a registered broker/dealer.Member <a target="_blank" href="http://www.finra.org/" target="_blank">FINRA</a> &amp; <a target="_blank" href="http://www.sipc.org/" target="_blank">SIPC</a>.</em></p>

        </div>

      </div>

    </div>

  </div>

</div>

</div>

</footer>

</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<script>

// Scroll To Top

jQuery(document).ready(function() {

	var offset = 220;

	var duration = 500;

	jQuery(window).scroll(function() {

		if (jQuery(this).scrollTop() > offset) {

			jQuery('.scrollup').fadeIn(duration);

			} 

			else {

				jQuery('.scrollup').fadeOut(duration);

			}

		});

		

	jQuery('.scrollup').click(function(event) {

	event.preventDefault();

	jQuery('html, body').animate({scrollTop: 0}, duration);

	return false;

	})

});

</script>

<a href="#" class="scrollup">Scroll to Top</a>





<?php wp_footer(); ?>

</body>

</html>