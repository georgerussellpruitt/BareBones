<?php

/*
 * 
 * get_header($template)
 *
 * pulls header uses default if none provided
 *
 */
function get_header( $template = false ) {
	if($template) {
		$filename = "";
	} else {
		$filename = "";
	}
	$header_html = file_get_contents($filename);
	return $header_html;
}

?>