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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

<meta property="og:image" content="http://static.squarespace.com/static/530cfa4ae4b0f939698eb0b6/530cfb3ce4b0e0e84255d686/538d4190e4b091f08441d590/?format=1000w"/>
<meta itemprop="name" content="Meld Financial - Home"/>
<meta itemprop="url" content="index.html"/>
<meta itemprop="description" content="The Meld Financial Difference

Situational Investing

Learn More"/>
<meta itemprop="thumbnailUrl" content="http://static.squarespace.com/static/530cfa4ae4b0f939698eb0b6/530cfb3ce4b0e0e84255d686/538d4190e4b091f08441d590/?format=1000w"/>
<link rel="image_src" href="http://static.squarespace.com/static/530cfa4ae4b0f939698eb0b6/530cfb3ce4b0e0e84255d686/538d4190e4b091f08441d590/?format=1000w" />
<meta itemprop="image" content="http://static.squarespace.com/static/530cfa4ae4b0f939698eb0b6/530cfb3ce4b0e0e84255d686/538d4190e4b091f08441d590/?format=1000w"/>
<meta name="description" content="Investment Management with a Financial Planning Perspective" />
<script type="text/javascript">SQUARESPACE_ROLLUPS = {};</script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//static.squarespace.com/universal/scripts-compressed/common-b0c626fd7c187371b2f0208eb47a36ed-min.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common');</script>
<script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//static.squarespace.com/universal/scripts-compressed/commerce-cfbec50462637311c832714f0686fb6c-min.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');</script>
<script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//static.squarespace.com/universal/styles-compressed/commerce-5dc7d6daf4ea5e10f6755e09ce5f85d8-min.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');</script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
<script type="text/javascript" data-sqs-type="dynamic-assets-loader">(function() {(function(a){try{if(window.top!=window&&window.top.Squarespace&&window.top.Squarespace.frameAvailable){window.top.Squarespace.frameAvailable(window,SQUARESPACE_ROLLUPS);return}}catch(d){console.error(d)}for(var c in a){if(a[c].js)for(var b=0;b<a[c].js.length;b++)document.write('<script type="text/javascript" src="'+a[c].js[b]+'">\x3c/script>');if(a[c].css)for(b=0;b<a[c].css.length;b++)document.write('<link rel="stylesheet" type="text/css" href="'+a[c].css[b]+'" />')}})(SQUARESPACE_ROLLUPS);
})();</script>
<script> Static.SQUARESPACE_CONTEXT = {"rollups":{"squarespace-audio-player":{"css":"//static.squarespace.com/universal/styles-compressed/audio-player-e30821377b06fc27e1b4c80dd4927e7e-min.css","js":"//static.squarespace.com/universal/scripts-compressed/audio-player-6fc5056c923d63fab01ced3df100d9b9-min.js"},"squarespace-calendar-block-renderer":{"css":"//static.squarespace.com/universal/styles-compressed/calendar-block-renderer-edb9ea58c015fca447b97a2948a5c589-min.css","js":"//static.squarespace.com/universal/scripts-compressed/calendar-block-renderer-7555d5728aebc9b25f8e0d2bd9acdbe0-min.js"},"squarespace-comments":{"css":"//static.squarespace.com/universal/styles-compressed/comments-6a84b91cae7677e4369e9db4d42f6439-min.css","js":"//static.squarespace.com/universal/scripts-compressed/comments-726f7c16559dd07411d4fc5fcbe87fba-min.js"},"squarespace-dialog":{"css":"//static.squarespace.com/universal/styles-compressed/dialog-6d761c4b048e52adda60acb2b80c15c3-min.css","js":"//static.squarespace.com/universal/scripts-compressed/dialog-2c1c4edc6847b192546bfdb2ac304334-min.js"},"squarespace-events-collection":{"css":"//static.squarespace.com/universal/styles-compressed/events-collection-edb9ea58c015fca447b97a2948a5c589-min.css","js":"//static.squarespace.com/universal/scripts-compressed/events-collection-a63193e2cba8ee019a82b3c54e4709cb-min.js"},"squarespace-pinterest":{"css":"//static.squarespace.com/universal/styles-compressed/pinterest-d41d8cd98f00b204e9800998ecf8427e-min.css","js":"//static.squarespace.com/universal/scripts-compressed/pinterest-e2d1ba37ad07db5eeada67621609a0d0-min.js"}},"pageType":2,"website":{"id":"530cfa4ae4b0f939698eb0b6","identifier":"will-connor","contentModifiedOn":1406640519265,"cloneable":false,"siteStatus":{},"language":"en-US","timeZone":"America/Chicago","machineTimeZoneOffset":-21600000,"timeZoneOffset":-21600000,"timeZoneAbbr":"CST","siteTitle":"Meld Financial","siteTagLine":"Customer driven goals melded with independent and objective financial services","siteDescription":"<p>This is the website of Meld Financial, Inc., an independent financial advisor located in Vestavia Hills, AL. &nbsp;Here you will find information about our financial planning services, our investment management services, who we are, who we work for, and more.</p>","location":{"mapZoom":10.0,"mapLat":33.31354211383686,"mapLng":-86.85759567285157,"markerLat":33.457164,"markerLng":-86.73880600000001,"addressTitle":"Meld Financial","addressLine1":"3008 Pump House Road","addressLine2":"Birmingham, AL 35243","addressCountry":""},"logoImageId":"530d20b7e4b048ae8c12b302","shareButtonOptions":{"7":true,"4":true,"6":true,"8":true,"5":true,"1":true,"2":true,"3":true},"logoImageUrl":"//static.squarespace.com/static/530cfa4ae4b0f939698eb0b6/t/530d20b7e4b048ae8c12b302/1406640519265/","authenticUrl":"http://www.meldfinancial.com","baseUrl":"http://www.meldfinancial.com","primaryDomain":"www.meldfinancial.com","typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false},"websiteSettings":{"id":"530cfa4ae4b0f939698eb0b7","websiteId":"530cfa4ae4b0f939698eb0b6","type":"Business","subject":"Financial/Accounting Services","subjects":[{"systemSubject":"other","otherSubject":"Investment and Planning Services"}],"country":"US","state":"AL","markdownMode":false,"simpleLikingEnabled":true,"mobileInfoBarSettings":{"style":1,"isContactEmailEnabled":true,"isContactPhoneNumberEnabled":true,"isLocationEnabled":true,"isBusinessHoursEnabled":true},"announcementBarSettings":{"style":1,"text":"<p>Testing</p>"},"lastAgreedTermsOfService":2,"defaultPostFormat":"%y/%m/%d/%t","commentLikesAllowed":false,"commentAnonAllowed":false,"commentThreaded":false,"commentApprovalRequired":false,"commentAvatarsOn":false,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":false,"commentEnableByDefault":false,"commentDisableAfterDaysDefault":0,"disqusShortname":"","notFoundPageId":"530cfb3ce4b0e0e84255d686","homepageTitleFormat":"%s","collectionTitleFormat":"%c \u2014 %s","itemTitleFormat":"%i \u2014 %s","commentsEnabled":false,"contactPhoneNumber":"205.967.4200","contactEmail":"meld@meldfinancial.com","allowSquarespacePromotion":true,"storeSettings":{"returnPolicy":null,"termsOfService":null,"privacyPolicy":null,"expressCheckout":false,"useLightCart":false,"showNoteField":false,"currenciesSupported":["USD"],"defaultCurrency":"USD","selectedCurrency":"USD","measurementStandard":1,"orderConfirmationInjectCode":"","showCustomCheckoutForm":false,"enableMailingListOptInByDefault":true,"isLive":false,"stripeConnected":false,"storeState":3},"useEscapeKeyToLogin":true,"configurationMenuItems":[{},{},{},{},{},{},{}],"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1},"websiteCloneable":false,"collection":{"title":"Meld Financial - Home","id":"530cfb3ce4b0e0e84255d686","fullUrl":"/"},"subscribed":false,"appDomain":"squarespace.com","secureDomain":"https://will-connor.squarespace.com","templateTweakable":true,"tweakJSON":{"aspect-ratio":"Auto","banner-slideshow-controls":"Arrows","gallery-arrow-style":"No Background","gallery-aspect-ratio":"3:2 Standard","gallery-auto-crop":"true","gallery-autoplay":"false","gallery-design":"Grid","gallery-info-overlay":"Show on Hover","gallery-loop":"false","gallery-navigation":"Bullets","gallery-show-arrows":"true","gallery-transitions":"Fade","galleryArrowBackground":"rgba(34,34,34,1)","galleryArrowColor":"rgba(255,255,255,1)","galleryAutoplaySpeed":"3","galleryCircleColor":"rgba(255,255,255,1)","galleryInfoBackground":"rgba(0, 0, 0, .7)","galleryThumbnailSize":"100px","gridSize":"280px","gridSpacing":"10px","logoContainerWidth":"225px","product-gallery-auto-crop":"false","product-image-auto-crop":"true","siteTitleContainerWidth":"220px"},"templateId":"52a74dafe4b073a80cd253c5","pageFeatures":[1,2],"impersonatedSession":false,"demoCollections":[{"collectionId":"52a76db3e4b0dfaa507e7b18","deleted":true},{"collectionId":"52b1eff5e4b0871946c207e4","deleted":true},{"collectionId":"52a76dc2e4b0dfaa507e7b32","deleted":true},{"collectionId":"52c71337e4b07aa29e46fa44","deleted":true},{"collectionId":"52d8053ce4b0e26973428261","deleted":true},{"collectionId":"52cad0a1e4b06ad2e57287af","deleted":true},{"collectionId":"52d067ace4b0bd5a03cf573b","deleted":true},{"collectionId":"52e18d59e4b08face9704bad","deleted":true},{"collectionId":"52e175e7e4b03c845ac17314","deleted":true},{"collectionId":"52d80724e4b0c692d7428ff2","deleted":true}],"isFacebookTab":false,"tzData":{"zones":[[-360,"US","C%sT",null]],"rules":{"US":[[1967,2006,null,"Oct","lastSun","2:00","0","S"],[1987,2006,null,"Apr","Sun>=1","2:00","1:00","D"],[2007,"max",null,"Mar","Sun>=8","2:00","1:00","D"],[2007,"max",null,"Nov","Sun>=1","2:00","0","S"]]}}}; SquarespaceFonts.loadViaContext(); Squarespace.load(window); </script>
<script type="text/javascript" src="../use.typekit.net/ik/vL-3Z8bGl_qAHM1KODeAbiHL9r28qJc8kUX8_BbPK1IfeGj2fFHN4UJLFRbh52jhWD9DweFcjQsyZQsKwejowDqh5Qy8jRgKFyTyiaiaOcu8desc-AoydcFTjA30jhNlOeu8desc-AoydcFTjA30jh"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if gte IE 9]> <link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&part=1"/><link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&part=2"/><link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&part=3"/><link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&part=4"/><![endif]-->
<!--[if lt IE 9]><script src="//static.squarespace.com/universal/scripts-thirdparty/html5/html5-shiv.js"></script><link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&noMedia=true&part=1"/><link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&noMedia=true&part=2"/><link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&noMedia=true&part=3"/><link rel="stylesheet" type="text/css" href="//static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/site.css?&noMedia=true&part=4"/><![endif]-->
<!--[if !IE]> --><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/static.squarespace.com/static/sitecss/530cfa4ae4b0f939698eb0b6/51/52a74dafe4b073a80cd253c5/530cfa4ae4b0f939698eb0bb/873/1406640519263/sited41d.css?"/><!-- <![endif]-->
<script type="text/javascript"> var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-51868323-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })(); </script><!-- End of Squarespace Headers -->
<script>/* Must be below {squarespace-headers} */(function(){var e='ontouchstart'in window||navigator.msMaxTouchPoints;var t=document.documentElement;if(!e&&t){t.className=t.className.replace(/touch-styles/,'')}})()
    </script>

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
  
  
  	
    <header class="header_new" style="background-image:url(http://melduniversity.com/wp-content/uploads/2014/11/P1110003-672x372.jpg);">
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
                                    <a href="http://melduniversity.com/blog/">View Blog</a>
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
                <a href="http://melduniversity.com/contact-1/">Take Action</a>
            </div>
        </div>
    </header>
    
