<?php
   // header('X-Frame-Options: GOFORIT'); 
?>
<?php 
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
