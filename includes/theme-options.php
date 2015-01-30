<?php

/**

 * Initialize the custom theme options.

 */

add_action( 'admin_init', 'custom_theme_options' );



/**

 * Build the custom settings & update OptionTree.

 */

function custom_theme_options() {

  

  /* OptionTree is not loaded yet */

  if ( ! function_exists( 'ot_settings_id' ) )

    return false;

    

  /**

   * Get a copy of the saved settings array. 

   */

  $saved_settings = get_option( ot_settings_id(), array() );

  

  /**

   * Custom settings array that will eventually be 

   * passes to the OptionTree Settings API Class.

   */

  $custom_settings = array( 

    'contextual_help' => array( 

      'sidebar'       => ''

    ),

    'sections'        => array( 

      array(

        'id'          => 'general',

        'title'       => __( 'General', 'theme-options.php' )

      ),


      array(

        'id'          => 'slider',

        'title'       => __( 'Slider', 'theme-options.php' )

      ),

      array(

        'id'          => 'footer',

        'title'       => __( 'Footer', 'theme-options.php' )

      ),

      array(

        'id'          => 'social_links',

        'title'       => __( 'Social Links', 'theme-options.php' )

      )

    ),

    'settings'        => array( 

      array(

        'id'          => 'theme_logo',

        'label'       => __( 'Theme Logo', 'theme-options.php' ),

        'desc'        => __( 'Paste the full URL (include http://) of your custom logo here or you can insert the image through the button.', 'theme-options.php' ),

        'std'         => '',

        'type'        => 'upload',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

array(

        'id'          => 'theme_logo_2',

        'label'       => __( 'Theme Logo University', 'theme-options.php' ),

        'desc'        => __( 'Paste the full URL (include http://) of your custom logo here or you can insert the image through the button.', 'theme-options.php' ),

        'std'         => '',

        'type'        => 'upload',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),
	  

	  

	    array(

        'id'          => 'blog_category_1',

        'label'       => __( 'Blog category', 'theme-options.php' ),

        'desc'        => __( 'Select the category from which you want to display the postin the blog page.', 'theme-options.php' ),

        'std'         => '',

        'type'        => 'category-select',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	  

	    array(

        'id'          => 'blog_category_2',

        'label'       => __( 'Blog category', 'theme-options.php' ),

        'desc'        => __( 'Select the category from which you want to display the postin the blog page.', 'theme-options.php' ),

        'std'         => '',

        'type'        => 'category-select',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	  

	    array(

        'id'          => 'blog_category_3',

        'label'       => __( 'Blog category', 'theme-options.php' ),

        'desc'        => __( 'Select the category from which you want to display the postin the blog page.', 'theme-options.php' ),

        'std'         => '',

        'type'        => 'category-select',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	  

	  

	  

      array(

        'id'          => 'header_change_name',

        'label'       => __( 'Text', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	  array(

        'id'          => 'mt_call_number',

        'label'       => __( 'Call Number', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'general',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	

      array(

        'id'          => 'soc_google',

        'label'       => __( 'Google Plus icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'slide_text_1',

        'label'       => __( 'Slide text 1', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'slider',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'slide_text_2',

        'label'       => __( 'Slide text 2', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'slider',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'slide_text_3',

        'label'       => __( 'Slide text 3', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'slider',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	  array(

        'id'          => 'slide',

        'label'       => __( 'Slide', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'slider',

        'section'     => 'slider',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'slide_contact',

        'label'       => __( 'Slide Contact Form Shortcode', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'slider',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

	  array(

        'id'          => 'footer_title',

        'label'       => __( 'Footer Title', 'theme-options.php' ),

        'desc'        => 'Give Footer a title if you want.',

        'std'         => 'DISEASES',

        'type'        => 'text',

        'section'     => 'footer',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'copyright',

        'label'       => __( 'Footer Bottom Copyright Text', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'footer',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'mt_custom_style',

        'label'       => __( 'Custom Css', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'css',

        'section'     => 'footer',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_rss',

        'label'       => __( 'Rss icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_facebook',

        'label'       => __( 'Facebook icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_twitter',

        'label'       => __( 'Twitter icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_youtube',

        'label'       => __( 'Youtube icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_linkedin',

        'label'       => __( 'LinkedIn icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      ),

      array(

        'id'          => 'soc_pinterest',

        'label'       => __( 'Pinterest icon link', 'theme-options.php' ),

        'desc'        => '',

        'std'         => '',

        'type'        => 'text',

        'section'     => 'social_links',

        'rows'        => '',

        'post_type'   => '',

        'taxonomy'    => '',

        'min_max_step'=> '',

        'class'       => '',

        'condition'   => '',

        'operator'    => 'and'

      )

    )

  );

  

  /* allow settings to be filtered before saving */

  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

  

  /* settings are not the same update the DB */

  if ( $saved_settings !== $custom_settings ) {

    update_option( ot_settings_id(), $custom_settings ); 

  }

  

  /* Lets OptionTree know the UI Builder is being overridden */

  global $ot_has_custom_theme_options;

  $ot_has_custom_theme_options = true;

  

}