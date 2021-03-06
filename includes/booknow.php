<?php

global $data; 
static $DOMAIN = 'qns';

switch (ICL_LANGUAGE_CODE) {
	case 'da':
		$title = 'Book din overnatning';
		$danhostel_id = 'hostel_id';
		$startDate = 'Check ind';
		$endDate = 'Check ud';
		$submitBTN = 'Søg';
		$url = 'https://m.danhostel.dk/hostel/'.get_field('hostel_id','option').'/select-room';
		break;

	case 'de':
		$title =  'Online buchen';
		$danhostel_id = 'hostel_id_de';
		$startDate = 'Einchecken';
		$endDate = 'Auschecken';
		$submitBTN = 'Suchen';
		$url = 'https://m.danhostel.dk/de/hostel/'.get_field('de:_hostel_id','option').'/select-room';
		break;

	case 'en':
		$title = 'Book your stay';
		$danhostel_id = 'hostel_id_en';
		$startDate = 'Check in';
		$endDate = 'Check out';
		$submitBTN = 'Search';
		$url = 'https://m.danhostel.dk/en/hostel/'.get_field('en:_hostel_id','option').'/select-room';
		break;
	
	default:
		$title = 'Book din overnatning';
		$danhostel_id = 'hostel_id';
		$startDate = 'Check ind';
		$endDate = 'Check ud';
		$submitBTN = 'Søg';
		$url = 'https://m.danhostel.dk/hostel/'.get_field('hostel_id','option').'/select-room';
		break;
	}
?>


<form class="booking-form booking-validation" name="bookroom" method="get" action="<?php echo $url; ?>" autocomplete="off">
    <h2 class="page-title"><strong><?php _e($title, $DOMAIN);?></strong></h2>
    <div class="undertitle bordertop2px" style="width:100%;     margin-bottom: 10px;height:20px;"></div>
    <div class="clearfix">
        <!--<input name="hostel_id" value="<?php echo $data[$danhostel_id];?>" type="hidden">-->
        <input type="text" id="fromdate" name="from" value="<?php //_e($startDate, $DOMAIN); ?>"class="input-half datepicker" placeholder="<?php echo __('Fra dato','danhostel');?>" required />
        <input type="text" id="todate" name="to" value="<?php //_e($endDate, $DOMAIN); ?>" class="input-half input-half-last datepicker" placeholder="<?php echo __('Til dato','danhostel');?>" required />
        <input name="persons" value="1" type="hidden">
        <input class="bookbutton" type="submit" value="<?php _e($submitBTN, $DOMAIN); ?>" />
    </div>
</form>				

<form class="booking-form booking-validation hidden" name="bookroom" method="get" action="<?php echo $url; ?>">
    <h2 class="page-title"><strong><?php _e($title, $DOMAIN);?></strong></h2>
    <div class="undertitle bordertop2px" style="width:100%;     margin-bottom: 10px;height:20px;"></div>
    <div class="clearfix">
        <!--<input name="hostel_id" value="<?php echo $data[$danhostel_id];?>" type="hidden">-->
        <input type="date" id="fromdate" name="from" value="<?php //_e($startDate, $DOMAIN); ?>"class="input-half datepicker" placeholder="<?php echo __('Fra dato','danhostel');?>" />
        <input type="date" id="todate" name="to" value="<?php //_e($endDate, $DOMAIN); ?>" class="input-half input-half-last datepicker" placeholder="<?php echo __('Til dato','danhostel');?>" />
        <input name="persons" value="1" type="hidden">
        <input class="bookbutton" type="submit" value="<?php _e($submitBTN, $DOMAIN); ?>" />
    </div>
</form>
