<?php 	 global $data; 
/*	  $booking_link = '';
if ( $data['booking_link'] ) {
  $booking_link = $data['booking_link'];
}
*/
switch(ICL_LANGUAGE_CODE){
	
		case 'da':
		$title = 'Kontakt os';
		break;

	case 'de':
		$title = 'Kontaktieren Sie uns';
		break;

	case 'en':
		$title = 'Contact us';
		break;
	
	default:
		$title = 'Kontakt os';
		break;
	}
?>   
<h2 class="page-title"><strong><?php _e($title,'qns'); ?></strong></h2>
	  <div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
			  <!--BEGIN .contact_list -->
			  <ul class="contact_list">
				  <?php if ( get_field('sted_navn','option') ) { ?>
                  <li class="sted_navn"><h3><?php the_field('sted_navn','option'); ?></h3></li>
				  <?php } ?>

				  <?php if ( get_field('abningstider','option') ) { ?>
                  <li class="office_hours" title="office-hours"><span><?php the_field('abningstider','option'); ?></a></span></li>
				  <?php } ?>

				   <?php if ( get_field('vaert','option') ) { ?>
                  <li class="vaert" title="Vært"><span><?php the_field('vaert','option'); ?></span></li>
				  <?php } ?>

				  <?php if ( get_field('adresse','option') ) { ?>
                  <li class="street_address" title="Adresse"><span><a href="http://maps.google.com/maps?q=<?php the_field('sted_navn','option'); ?> 
				  <?php the_field('adresse','option'); ?>"><?php the_field('adresse','option'); ?></a></span></li>
				  <?php } ?>

				  <?php if ( get_field('telefonnummer','option') ) { ?>
                  <li class="phone_number" title="Tel."><span><a href="tel://<?php the_field('telefonnummer','option'); ?>">
				  <?php the_field('telefonnummer','option'); ?></a></span></li>
				  <?php } ?>
                  
				  <?php if ( get_field('email','option') ) { ?>
                  <li class="email_address" title="Mail"><span><a href="mailto:<?php the_field('email','option'); ?>">
				  <?php the_field('email','option'); ?></a></span></li>
				  <?php } ?>
                  
				  <?php if ( get_field('cvr','option') ) { ?>
                  <li class="cvr" title="CVR"><span>CVR: <?php the_field('cvr','option'); ?></span></li>
				  <?php } ?> 
                  
				  <div class="fb-like" style="margin-top:8px;" data-href="<?php if (get_field('facebook','option')) { the_field('facebook','option'); } ?> " data-send="true" data-layout="button_count" data-width="250" data-show-faces="false"></div>

			  <!--END .contact_list -->
			  </ul>
