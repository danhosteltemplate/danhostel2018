<?php 

/* 
Template Name: Forside
*/ 

?>
<!-- home page -->
<?php get_header(); ?>
	<?php global $data; 
	$hostel_id = get_field('hostel_id','option');
?>



	<!-- BEGIN .section -->
	<div class="section clearfix">
		
		<!-- BEGIN .main-content -->
		
       
        
        
        <div class="slider slider-booking" style="z-index:20">
			
			<!-- BEGIN .slides -->
			<ul class="slides">
	
				 <?php if ( get_field('hvor_mange_nyheder_skal_vi_vise_i_oversigtsiden','option') ) {
					$posts_per_page = get_field('hvor_mange_nyheder_skal_vi_vise_i_oversigtsiden','option');
				 } else {
					$posts_per_page = -1;
				 } 
					query_posts( "post_type=event&posts_per_page=".$posts_per_page."&order=DESC" );

		    		if( have_posts() ) :
					while( have_posts() ) : the_post(); ?>

						<?php	
							// Get slideshow date
							$slideshow_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
							$slideshow_caption = get_the_content();			
						?>
						
						<li style="background-image:url(<?php echo $slideshow_image[0]; ?>);">
						<a href="<?php the_permalink(); ?>" class="main-url">
						
							<?php 
							
							// Display caption if it is set
							if ( $slideshow_caption != '' ) { ?>
							<div class="cwrapper980">
								<div class="flex-caption">
								<h3><?php the_title(); ?></h3>
								<p>
								<?php
								$content = get_the_content();
								echo wp_trim_words( $content, 40 ); ?>
								</p>
								
								<span class="more-link"><?php echo __('Læs mere','danhostel');?><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>
								
								
								</div>
							</div>
							<?php } ?>
							
						</a>
						</li>

					<?php endwhile; endif; ?>
	
			<!-- END .slides -->
			</ul>

		</div>
		
		 <div class="booknow-wrapper-main hidden">	
			<div class="cwrapper980">
				<div class="booknow jshide">
		
    <div class="booknow-wrapper">
    <div class="clearfix">
         <?php if ( get_field('licensnogle','option') == '465-894-132-489' ){
					if( get_field('skal_booking_boksen_vaere_tilgaengelig','option')!="Nej" ) {   load_template( get_template_directory() . '/includes/booknow.php' ); }
					}
				else { load_template( get_template_directory() . '/includes/booknow.php' );          } ?>
		<!-- END .slider -->
        </div>
        </div>
        </div>
		</div>
		<div class="clearfix"></div>
		</div>
		
		<div class="cwrapper980">
        
        <?php //Display Page Header
		global $wp_query;
		$postid = $wp_query->post->ID;
		echo page_header( get_post_meta($postid, 'qns_page_header_image', true) );
		wp_reset_query();?>

<div class="two-thirds">
              <div class="content-body leftfloater">                    
                  	
			<div class="page-content blog-list-wrapper">
			
            	<h1 class="page-title"><strong><?php the_title(); ?></strong></h1>
				<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
                
				<?php load_template( get_template_directory() . '/includes/loop.php' ); ?>
</div>
</div>
<?php if(get_field('booking_banner','option')){ ?>
<div class="content-body leftfloater booking-banner"><?php if(get_field('booking_banner','option')){ ?><a href="<?php the_field('booking_url','option'); ?>" target="_blank"><img src="<?php the_field('booking_banner','option'); ?>"/></a><?php } ?></div>
<?php } ?>
<?php 
if(get_field('vis_facebook_nyhedsboksen_midt_pa_forsiden','option') =="Ja"){
	
	
	global $data;
	static $DOMAIN = 'qns';
	
	switch(ICL_LANGUAGE_CODE){
		case 'dk' :
			$wall = 'Væg';
		break;
		
		case 'de' :
			$wall = 'Wand';
		break;
		
		case 'en' :
			$wall = 'Wall';
		break;
		default : 
			$wall = 'Væg';
		break;
	}
	?>   
	<div class="content-body leftfloater">
		<div class="borderino">
			<h2 class="page-title"><strong><?php echo get_bloginfo(); echo ' Facebook '; echo _e($wall,$DOMAIN); ?></strong></h2>
				<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
				
				<div style="<?php if( get_field('vis_facebook_nyhedsboksen_midt_pa_forsiden','option')!="Ja" ) {?>width: 250px; padding: 0 5px 10px 0;<?php } else {?>width:100%; <?php } ?> margin: 0px auto; display: block;"
				
				
				class="fb-page" data-href="<?php the_field('facebook','option'); ?>" data-tabs="timeline" data-width="<?php if( get_field('vis_facebook_nyhedsboksen_midt_pa_forsiden','option')!="Ja" ) {?>280px<?php } else {?>500px<?php } ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
				
		</div>
	</div>
	
	<?php 
}else{}

?>
<?php 
if(get_field('skal_nyhedsboksen_vises_pa_forsiden','option') =="Ja"){
load_template( get_template_directory() . '/includes/nyheder-right.php' ); 
}else{}
?>
</div>

<!-- BEGIN Right Column -->      
      <div class="one-third last-col">               
          	<?php if( get_field('quicklinksforside','option')!="Nej" ) { load_template( get_template_directory() . '/includes/quicklinks.php' ); }
			echo '<div class="content-body leftfloater">';
			echo '<div class="borderino">';
			load_template( get_template_directory() . '/includes/kontaktos.php' ); 
			echo '</div>';
			load_template( get_template_directory() . '/includes/map.php' );
			echo '</div>';

			if ( is_active_sidebar( 'primary' ) ) : 
				echo '<div class="content-body leftfloater" style="margin-top:0px;background: transparent;">';
				dynamic_sidebar( 'primary' ); 
				echo '</div>';
			else : 
				
			endif;

          	if(get_field('vis_facebook_nyhedsboksen_i_hojre_kolonne','option')=="Ja") { 
				 
          		load_template( get_template_directory() . '/includes/facebook-right.php' ); 
          	}
          	else{}
          	load_template( get_template_directory() . '/includes/ikoner.php' ); 
          	load_template( get_template_directory() . '/includes/ratingwidget.php' );
          	load_template( get_template_directory() . '/includes/linkbox.php' ); 
          	load_template( get_template_directory() . '/includes/turistinfo.php' ); ?>
      </div>
       <!-- END Right Column -->
       			</div>
            </div>
        <!-- END .main-content -->
		</div>
	<!-- END .section -->
	</div>
<?php get_footer(); ?>
