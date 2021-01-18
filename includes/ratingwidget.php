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

<?php if(get_field('skal_boksen_med_ratings_vaere_sma_eller_stor','option')=="big"){ ?>

<script>

      var dhWidgetSettings = dhWidgetSettings || [];

 

      dhWidgetSettings.push({

        hostelId: "<?php the_field('rating_id','option'); ?>",

         htmlId: "dh-widget-average-big",

         size: "big",

      });

      (function (w) {

        if (document.getElementById("dhRatingScript")) return;

        let dhW = document.createElement("script");

        dhW.id = "dhRatingScript";

        dhW.type = "text/javascript";

        dhW.defer = true;

        dhW.src = "https://www.danhostel.dk/ratings-widget-js";

        const s = document.getElementsByTagName("script")[0];

        s.parentNode.insertBefore(dhW, s);

      })(window);

    </script>

    <div id="dh-widget-average-big"></div>

 <?php } else { ?>

<script>

      var dhWidgetSettings = dhWidgetSettings || [];

 

      dhWidgetSettings.push({

        hostelId: "<?php the_field('rating_id','option'); ?>",

         htmlId: "dh-widget-average-small",

         size: "small",

      });

      (function (w) {

        if (document.getElementById("dhRatingScript")) return;

        let dhW = document.createElement("script");

        dhW.id = "dhRatingScript";

        dhW.type = "text/javascript";

        dhW.defer = true;

        dhW.src = "https://www.danhostel.dk/ratings-widget-js";

        const s = document.getElementsByTagName("script")[0];

        s.parentNode.insertBefore(dhW, s);

      })(window);

    </script>

    <div id="dh-widget-average-small"></div>

<?php } ?>

</div>
</div>

<?php endif; ?>
