                    <?php 	 global $data; 
if( (get_field('er_din_vandrerhjem_kursus_certificeret','option')!="Nej") && (get_field('turist_info','option')!="") && ($data['turistlink']!="") ) { ?>
             
						
                        
                         <div class="content-body leftfloater">                    

							<div class="borderino" style="padding-bottom:0px;">
								<h2 class="page-title" style="margin-bottom:10px;"><strong class="borderbottom2px" style="padding-bottom:12px;"><?php _e( 'Turist info','qns' )?></strong></h2>
								<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>

<div class="event-list-wrapper">

																				
					                </div>
                                    
                          </div>    
                          
                          						<?php // Get the Thumbnail URL?>
							<a href="<?php the_field('turist_info_url','option'); ?>"><img src="<?php the_field('turist_info','option'); ?>" alt="" class="prev-image" style="margin-bottom:-6px;"/></a>
												</div>

                               

                                                                        <?php } ?>                            
    
