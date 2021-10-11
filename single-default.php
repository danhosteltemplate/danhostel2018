<?php get_header(); ?>

	<?php //Display Page Header
global $data;
	?>
	
	<!-- BEGIN .section -->
	<div class="section clearfix">
		
		<!-- BEGIN .main-content -->
		<div class="cwrapper960">
        
			<div class="two-thirds">
              <div class="content-body leftfloater">                    
                  	
			<div class="page-content blog-list-wrapper">
			
            	<h2 class="page-title"><strong class="borderbottom4px" style="padding-bottom:12px;"><?php the_title(); ?></strong></h2>
				<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
                
				<?php load_template( get_template_directory() . '/includes/loop.php' ); ?>
                </div>
                
                </div>
                
                </div> 
                
                <p>Hvor er dette?</p>
<?php 					$street_address = ''; 
						$phone_number = '';
						$email_address = '';
						$sted_navn = '';
						$cvr = '';
						$vaert = '';

					
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
					?>
                    <div class="one-third last-col">
                         <div class="content-body leftfloater">                    

							<div class="borderino">
								<h2 class="page-title" style="margin-bottom:10px;"><strong class="borderbottom4px" style="padding-bottom:12px;"><?php _e( 'Kontakt os','qns' )?></strong></h2>
								<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
							
										<!--BEGIN .contact_list -->
										<ul class="contact_list">
                                        	<?php if ( $sted_navn ) { ?><li class="sted_navn"><span style="font-weight:bold"><?php the_field('sted_navn','option'); ?></span></li><?php } ?>
											<?php if ( $street_address ) { ?><li class="street_address"><span><a href="https://maps.google.com/maps?q=<?php the_field('sted_navn','option'); ?> <?php the_field('adresse','option'); ?>"><?php the_field('adresse','option'); ?></a></span></li><?php } ?>
											<?php if ( $email_address ) { ?><li class="email_address"><span><a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a></span></li><?php } ?>
											<?php if ( $phone_number ) { ?><li class="phone_number"><span><a href="tel://<?php the_field('telefonnummer','option'); ?>"><?php the_field('telefonnummer','option'); ?></a></span></li><?php } ?>
                                            <?php if ( $vaert ) { ?><li class="vaert"><span><?php the_field('vaert','option'); ?></span></li><?php } ?>
                                            <?php if ( $cvr ) { ?><li class="cvr"><span><?php the_field('cvr','option'); ?></span></li><?php } ?> 

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
			</div>
            </div>

        <!-- END .main-content -->
		</div>

		
	<!-- END .section -->
	</div>

<?php get_footer(); ?>
