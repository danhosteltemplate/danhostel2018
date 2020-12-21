<?php
global $data;
       
// If the Google Maps option is selected display the map
	  
	$map_lat = get_field('google_map_latitude','option');
	$map_lng = get_field('google_map_longitude','option');
	  
	  if ( get_field('google_map_marker','option') ) {
		  $map_content = 'marker_html="' . get_field('google_map_marker','option') . '"';
	  }
	  echo do_shortcode('[googlemap height="300px" width="100%" latitude="' . $map_lat . '" longitude="' . $map_lng . '" marker_latitude="' . $map_lat . '" marker_longitude="' . $map_lng . '" ' . $map_content . ' marker_popup=false ]');
?>
