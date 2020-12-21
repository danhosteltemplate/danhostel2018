<?php 

/* 
Template Name: Kontakt
*/ 

?>

<?php get_header(); ?>

	<?php //Display Page Header
	global $data;
		global $wp_query;
		$postid = $wp_query->post->ID;
		echo page_header( get_post_meta($postid, 'qns_page_header_image', true) );
		wp_reset_query();
	?>
	
	<!-- BEGIN .section -->
	<div class="section clearfix">
		
		<!-- BEGIN .main-content -->
		<div class="cwrapper980">
        
			<div class="two-thirds">
              <div class="content-body leftfloater" style="margin-bottom:0" >                    
                  	
			<div class="page-content blog-list-wrapper" >
			
            	<h2 class="page-title"><strong class="borderbottom4px" style="padding-bottom:12px;"><?php the_title(); ?></strong></h2>
				<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
                
				<?php load_template( get_template_directory() . '/includes/loop.php' ); ?>
                </div>
                
                </div>
                
                <?php					
						$gmap_360 = '';
					
						if ( get_field('google_360_eller_youtube','option') ) {
							$gmap_360 = get_field('google_360_eller_youtube','option');
						}
						
						if ( $gmap_360 ) { ?><div><?php the_field('google_360_eller_youtube','option'); ?><?php } ?></div>

                
                </div>

<?php 					$street_address = ''; 
						$phone_number = '';
						$email_address = '';
						$sted_navn = '';
						$cvr = '';
						$vaert = '';
						$social_facebook = '';

					
						if ( get_field('adresse','option') ) {
							$street_address = get_field('adresse','option');
						}
						
						if ( get_field('cvr','option') ) {
							$cvr = get_field('cvr','option');
						}
						
						if ( get_field('vaert','option') ) {
							$vaert = get_field('vaert','option');
						}
					
						if ( get_field('telefonnummer','option') ) {
							$phone_number = get_field('telefonnummer','option');
						}
					
						if ( get_field('email','option') ) {
							$email_address = get_field('email','option');
						}	
						if ( get_field('sted_navn','option') ) {
							$sted_navn = get_field('sted_navn','option');
						}	
						if ( get_field('facebook','option') ) {
							$social_facebook = get_field('facebook','option');
						}	

					?>
                    <div class="one-third last-col">
                    
      <div class="content-body leftfloater" style="margin-bottom:0;">                    

		<div class="borderino">
                    
                    
                    			<!-- BEGIN .booknow -->
			<div class="booknow" style="position:relative;height: 100%;
    left: 0;
    padding: 0;
    width: 100%;
    z-index: 1;
    box-shadow:none;
    margin-bottom:0;
    bottom:0px !important;
    border:none;">
				
				<!-- BEGIN .booknow-wrapper -->
				<div class="booknow-wrapper" style="width:100% !important; padding:0 !important">
				
				<?php			
					// Get booking page ID
					$booking_page = $data['booking_page_url'];
				?>
				
				<form class="booking-form booking-validation" name="bookroom" method="get" action="<?php _e($data['booking_link'],'qns'); ?>"> 
<h2 style="margin-bottom:10px;" class="page-title"><strong class="borderbottom4px" style="padding-bottom:12px;"><?php _e('Book online','qns'); ?></strong></h2>
								<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>

					<div class="clearfix">
                    	<input name="hostel_id" value="<?php the_field('hostel_id','option'); ?>" type="hidden">

						<input type="date" id="fromdate" name="fromdate" value="<?php _e('Check ind','qns'); ?>" class="input-half datepicker">
						<input type="date" id="todate" name="todate" value="<?php _e('Check ud','qns'); ?>" class="input-half input-half-last datepicker">
                                                <input name="persons" value="1" type="hidden">

					</div>
					
					    <input name="sprog" value="DK" type="hidden"> 
   						<input name="profileid" value="0" type="hidden">

					<input class="bookbutton" type="submit" value="<?php _e('Søg','qns'); ?>" />
				
				</form>
								
				<!-- END .booknow-wrapper -->
				</div>
				
			<!-- END .booknow -->
			</div>

                    
        </div></div>            
                    
                    
                         <div class="content-body leftfloater">                    

							<div class="borderino">
								<h2 class="page-title" style="margin-bottom:10px;"><strong class="borderbottom4px" style="padding-bottom:12px;"><?php _e( 'Kontakt os','qns' )?></strong></h2>
								<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
							
										<!--BEGIN .contact_list -->
										<ul class="contact_list">
                                        	<?php if ( $sted_navn ) { ?><li class="sted_navn"><span style="font-weight:bold"><?php the_field('sted_navn','option'); ?></span></li><?php } ?>
											<?php if ( $street_address ) { ?><li class="street_address"><span><a href="http://maps.google.com/maps?q=<?php the_field('sted_navn','option'); ?> <?php the_field('adresse','option'); ?>"><?php the_field('adresse','option'); ?></a></span></li><?php } ?>
											<?php if ( $email_address ) { ?><li class="email_address"><span><a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a></span></li><?php } ?>
											<?php if ( $phone_number ) { ?><li class="phone_number"><span><a href="tel://<?php the_field('telefonnummer','option'); ?>"><?php the_field('telefonnummer','option'); ?></a></span></li><?php } ?>
                                            <?php if ( $vaert ) { ?><li class="vaert"><span><?php the_field('vaert','option'); ?></span></li><?php } ?>
                                            <?php if ( $cvr ) { ?><li class="cvr"><span><?php the_field('cvr','option'); ?></span></li><?php } ?> 
                                            <div class="fb-like" style="margin-top:8px;" data-href="<?php if ( $social_facebook ) { the_field('facebook','option'); } ?> " data-send="true" data-layout="button_count" data-width="250" data-show-faces="false"></div>


										<!--END .contact_list -->
										</ul>
                                        </div>
                                 </div>
                                 
                             <div class="leftfloater" style="margin-top:-20px;">       
                                        <?php 
							// If the Google Maps option is selected display the map
								
								$map_lat = get_field('google_map_latitude','option');
								$map_lng = get_field('google_map_longitude','option');
								
								if ( get_field('google_map_marker','option') ) {
									$map_content = 'marker_html="' . get_field('google_map_marker','option') . '"';
								}
								
								echo do_shortcode('[googlemap height="300px" width="100%" latitude="' . $map_lat . '" longitude="' . $map_lng . '" marker_latitude="' . $map_lat . '" marker_longitude="' . $map_lng . '" ' . $map_content . ' marker_popup=false ]');
							

							// If the contact form has errors display them to the user
							if ( $got_error == true ) {

								echo '<div class="msg fail">
								<ul class="list-fail">';

								if ( $name_error != '' ) { echo '<li>' . $name_error . '</li>'; }
								if ( $email_error != '' ) { echo '<li>' . $email_error . '</li>'; }
								if ( $contact_error != '' ) { echo '<li>' . $contact_error . '</li>'; }
																if ( $contact_error != '' ) { echo '<li>' . $contact_error . '</li>'; }


								echo '</ul></div>';

							}?>
									</div>
                                    
                                    <div class="content-body leftfloater">                    

							<div class="borderino" style="padding-bottom:0px;">
								<h2 class="page-title" style="margin-bottom:10px;"><strong class="borderbottom4px" style="padding-bottom:12px;"><?php _e( 'Nyheder','qns' )?></strong></h2>
								<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>

<div class="event-list-wrapper">

					
					<?php
						
						if( get_field('hvor_mange_nyheder_skal_vi_vise_i_oversigtsiden','option') ) { 
							$event_perpage = get_field('hvor_mange_nyheder_skal_vi_vise_i_oversigtsiden','option');
						}
						else {
							$event_perpage = '1';
						}
					
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
						query_posts( "post_type=event&posts_per_page=1" );

			    		if( have_posts() ) :
						while( have_posts() ) : the_post(); ?>
															
							<!-- BEGIN .event-prev -->	
							<div class="event-prev clearfix">

									<h4 style="background:none; margin-bottom:0;"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="background:none;  color:#000; font-weight:bold;"><?php the_title(); ?></a></h4>
<?php the_excerpt();?>
							<!-- END .event-prev -->
							</div>

					                </div>
                                    
                          </div>    
                          
                          						<?php // Get the Thumbnail URL
							$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-size' );
							echo '<img src="' . $src[0] . '" alt="" class="prev-image" style="margin-bottom:-6px;"/>';
						?>
                          						<?php endwhile; else : ?>

							<p><?php _e('No events have been added yet','qns'); ?></p>
						
						<?php endif; ?>      
			</div>
                    </div>

            </div>

        <!-- END .main-content -->
		</div>

		
	<!-- END .section -->
	</div>

<?php get_footer(); ?>
