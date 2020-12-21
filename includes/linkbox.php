                    <?php 	 global $data; 
 
						?>
                         <?php if ( get_field('text1','option') ) { ?>
<div class="content-body leftfloater">                    

							<div class="borderino" style="padding-bottom:0px;">
								<h2 class="page-title" style="margin-bottom:10px;"><strong class="borderbottom2px" style="padding-bottom:12px;"><?php _e( 'Danhostel Links','qns' )?></strong></h2>
								<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>

<div class="event-list-wrapper">

															
							<!-- BEGIN .event-prev -->	
							<div class="event-prev clearfix">

								<?php if(ICL_LANGUAGE_CODE=='da') {_e('Ferie i Danmark – overnat på et Danhostel vandrerhjem – Billig familieferie og sjove lejrskoleophold. Besøg fx.:','qns');}
					if(ICL_LANGUAGE_CODE=='en') {_e('Planing another vacation in Denmark: try one of our fantastic Danhostels like for example:','qns'); }
					if(ICL_LANGUAGE_CODE=='de') {_e('Andere Danhostels:','qns'); } ?>	
                                <ul>
                                <li><a href="<?php the_field('link1','option'); ?>" target="_blank"><?php the_field('text1','option'); ?></a></li>
                                <li><a href="<?php the_field('link2','option'); ?>" target="_blank"><?php the_field('text2','option'); ?></a></li>
                                <li><a href="<?php the_field('link3','option'); ?>" target="_blank"><?php the_field('text3','option'); ?></a></li>
                                </ul>
							<!-- END .event-prev -->
							</div>

					                </div>
                                    
                          </div>    
                               
						</div><?php } ?>
