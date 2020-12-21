<?php

global $data; 
static $DOMAIN = 'qns';
switch(ICL_LANGUAGE_CODE){
	case 'dk':
		$rating = 'Ratings';
	break;
	case 'en':
		$rating = 'Ratings';
	break;
	case 'en':
		$rating = 'Bewertungen';
	break;
	default:
		$rating = 'Ratings';
	break;
}

if( (get_field('skal_boksen_med_ratings_vises_pa_hjemmesiden','option')!="Nej") && ( get_field('rating_id','option')!="") ) : 

switch(ICL_LANGUAGE_CODE){
	case 'en':
		$langvar = '&lng=en';
	break;
	default:
		$langvar = '';
	break;
}
?>

<div class="content-body leftfloater">                    
<div class="borderino" style="padding-bottom:0px; overflow-x: hidden; overflow-y: hidden;">
<h2 class="page-title" style="margin-bottom:10px;"><strong class="borderbottom2px" style="padding-bottom:12px;"><?php echo __('Ratings','danhostel');?></strong></h2>
<div class="undertitle bordertop2px" style="width:100%;"></div>

<iframe src="https://www.relationwise.com/danhostel/iwidget.aspx?hostelid=<?php the_field('rating_id','option'); ?>&size=<?php the_field('skal_boksen_med_ratings_vaere_sma_eller_stor','option'); echo $langvar; ?>" seamless="seamless" style="width:100%;height:<?php if(get_field('skal_boksen_med_ratings_vaere_sma_eller_stor','option')=="big"){echo '400px';} else{echo '140px';} ?>;border:0; overflow-x: hidden; overflow-y:hidden;"> </iframe>
</div>
</div>

<?php endif; ?>
