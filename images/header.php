<?php 

	// Fetch options stored in $data

	global $data; 

?>



<!DOCTYPE html>

<!--[if lt IE 7]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->

<!--[if IE 7]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->

<!--[if IE 8]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->

<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->



<!-- BEGIN head -->

<head>



	<!-- Meta Tags -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

	

	<?php 

		// Dislay Google Analytics Code

		if( get_field('google-analytics','option') ) { 

			the_field('google-analytics','option');

		}

		

		// Dislay Favicon

		if( $data['favicon_url'] ) { 			
			echo '<link rel="shortcut icon" href="' . $data['favicon_url'] . '" type="image/x-icon" />';
		}

	?>

	

	<!-- Title -->

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	

	<!-- Stylesheets -->

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css"  media="all"  />

	

	

	<?php // Load Custom CSS 

		echo custom_css(); 

	?>

	

	<!-- RSS Feeds & Pingbacks -->

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	

	<?php wp_head() ?>



<!-- END head -->



</head>



<!-- BEGIN body -->

<body <?php body_class(); ?>>



<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=316701205010060";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>



	<!-- BEGIN .background-wrapper -->

	<div class="background-wrapper">			

    

       <div class="fullwhite">

    		<div class="cwrapper980">

	

				



					<div id="title-wrapper" style="float:left; padding-top:20px;">

						<h1>

							<a href="<?php echo home_url(); ?>"><img src="<?php the_field('image_logo','option'); ?>" alt="" /></a>

						</h1>

					</div>                   

                     	<div id="title-wrapper2" class="forretning2" style="float:right; padding-top:10px;">



                    <?php 				if ( get_field('licensnogle','option') == '465-894-132-489' ){



						if( get_field('image_logo_right','option')!=null ) { ?>

						<h1>

							<a href="<?php the_field('link_forretning','option'); ?>"><img style="margin-bottom:3px;" id="forretning2" height="35" src="<?php the_field('image_logo_right','option'); ?>" alt="" /></a>

						</h1>

                     <?php } } ?>

                       <?php	do_action('icl_language_selector'); ?>



					</div>                    				

           </div>

           

         </div>

           

           <div class="fullblue">

           <div class="cwrapper980" >



				

				<!-- BEGIN #navigation -->

				<div id="navigation" class="clearfix<?php if ( $data['nav_contact'] ) { echo ' nav-contact'; }?>">

					

					<!-- BEGIN .nav-wrapper -->

					<div class="nav-wrapper">



					<!-- Main Menu -->

					<?php wp_nav_menu( array(

						'theme_location' => 'primary',

						'container' =>false,

						'items_wrap' => '<ul id="main-menu" class="fl clearfix">%3$s</ul>',

						//'fallback_cb' => 'wp_page_menu_qns',

						'echo' => true,

						'before' => '',

						'after' => '',

						'link_before' => '',

						'link_after' => '',

						'depth' => 0,

						'walker' => new description_walker() )

				 	); ?>

				

					<!-- Mobile Menu -->

					<?php wp_nav_menu( array(

						'theme_location' => 'primary',

						'container' =>false,

						'items_wrap' => '<ul id="mobile-menu" class="fl clearfix">%3$s</ul>',

						'fallback_cb' => 'wp_page_menu_qns',

						'echo' => true,

						'before' => '',

						'after' => '',

						'link_before' => '',

						'link_after' => '',

						'depth' => 0 )

				 	); ?>

						

			 

					

					<!-- END .nav-wrapper -->

					</div>

					

				<!-- END #navigation -->

				</div>

                

            </div></div>



