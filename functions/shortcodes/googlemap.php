<?php

function googlemap_shortcode( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'width' => '100%',
			'height' => '400px',
			'latitude' => '0',
			'longitude' => '0',
			'maptype' => 'ROADMAP',
			'zoom' => '14',
			'marker_latitude' => '0',
			'marker_longitude' => '0',
			'marker_address' => '',
			'marker_popup' => 'true',
			'marker_html' => '',
			'pan_control' => 'true',
			'zoom_control' => 'true',
			'map_type_control' => 'true',
			'scale_control' => 'true',
			'street_view_control' => 'false',
			'overview_map_control' => 'false',
		), $atts ) );
	
	if( isset($atts['width']) ) $width = $atts['width'];
	if( isset($atts['height']) ) $height = $atts['height'];
	if( isset($atts['latitude']) ) $latitude = $atts['latitude'];
	if( isset($atts['longitude']) ) $longitude = $atts['longitude'];
	if( isset($atts['maptype']) ) $maptype = $atts['maptype'];
	if( isset($atts['zoom']) ) $zoom = $atts['zoom'];
	if( isset($atts['marker_latitude']) ) $marker_latitude = $atts['marker_latitude'];
	if( isset($atts['marker_longitude']) ) $marker_longitude = $atts['marker_longitude'];
	if( isset($atts['marker_address']) ) $marker_address = $atts['marker_address'];
	if( isset($atts['marker_popup']) ) $marker_popup = $atts['marker_popup'];
	if( isset($atts['marker_html']) ) $marker_html = $atts['marker_html'];
	if( isset($atts['pan_control']) ) $pan_control = $atts['pan_control'];
	if( isset($atts['zoom_control']) ) $zoom_control = $atts['zoom_control'];
	if( isset($atts['map_type_control']) ) $map_type_control = $atts['map_type_control'];
	if( isset($atts['scale_control']) ) $scale_control = $atts['scale_control'];
	if( isset($atts['street_view_control']) ) $street_view_control = $atts['street_view_control'];
	if( isset($atts['overview_map_control']) ) $overview_map_control = $atts['overview_map_control'];
	
	$output = '';
	
	// GOOGLE MAP API HERE
	global $data;
	if( isset($data['gmap-api']) ) {
		$gapi = $data['gmap-api'];
	} else {
		$gapi = 'AIzaSyB2jhR794akD1be1uqgKoA5hq5mEf7b-zc';
	}
	$output .= '<script async defer
    src="https://maps.googleapis.com/maps/api/js?key='.$gapi.'&callback=initMap">
    </script>';
	
	// GOOGLE MAP API HERE
	
	$output .= '<div id="map" style="';
	$output .= 'width:' . $width . ';';
	$output .= 'height:' . $height . ';';
	$output .= '"></div>';
	$output .= '<script type="text/javascript">
	function initMap() {
  // The location of Uluru
  var uluru = {lat: ' . $latitude . ', lng: ' . $longitude . '};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById("map"), {zoom: '. $zoom .', center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

		</script>
	
	';
	
	return $output;

}

add_shortcode( 'googlemap', 'googlemap_shortcode' );

?>
