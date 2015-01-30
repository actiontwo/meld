<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>






<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>


<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>


<?php wp_head(); ?>
</head>

<body>





<div id="siteWrapper" class="clearfix">
  <div class="sqs-cart-dropzone"></div>
  
  
  	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <header class="header_new" style="background-image:url(<?php echo $feat_image;?>);">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-2">
                	<div class="new_logo">
                    	<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
                    </div>
                </div>
            	<div class="col-md-10">
                	<div class="top_menu">
                    	<div class="row">
                        	<div class="col-md-9">
                                <ul>
                                    <li><a href="<?php echo home_url(); ?>"><i class="fa fa-home"></i> HOME</a></li>
                                    <li><a href="https://www.mystreetscape.com"><i class="fa fa-user"></i> CLIENT LOGIN</a></li>
                                    <li><a href="http://melduniversity.com/contact-1/"><i class="fa fa-phone"></i> CONTACT US</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <div class="top_action">
                                    <a href="http://melduniversity.com/take-action/">Take Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="menu_wrapper">
        	<div class="container">
            	<div class="menu">
                    <nav>
                        <div class="main-nav">
                        	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'main-nav' ) ); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="container">
        	<div class="header_text">
            	<h5>The Meld Financial Difference</h5>
                <h1>SITUATIONAL INVESTING</h1>
                <a href="http://melduniversity.com/overview/">Learn More</a>
            </div>
        </div>
    </header>
    
