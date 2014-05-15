<?php

/*
 * 
 * get_header($template)
 *
 * pulls header uses default if none provided
 *
 */
function get_header( $template = false ) {
	global $CFG;
	// following will be used later
	/*
	if($template) {
		$filename = "";
	} else {
		$filename = "";
	}
	$header_html = file_get_contents($filename);
	return $header_html;
	*/
	$output = '<!DOCTYPE html>\n'
			. '<html>\n'
			. '<head>\n'
			. '<title></title>\n';
	$output .= '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>\n';
	$output .= '<link rel="stylesheet" type="text/css" href="'.$CFG->style.'">\n';
	$output .= '</head>\n';
	$output .= '<body>\n';
	$output .= '	<div id="container-wrapper">\n';
	$output .= '		<div id="container">\n';
	$output .= '			<div id="header-wrapper">\n';
	$output .= '				<div id="header"></div>\n';
	$output .= '			</div>\n';
	$output .= '			<div id="content-wrapper">\n';
	$output .= '				<div id="content">\n';
	return $output;
}

function get_footer( $template = false ){
	global $CFG;
	$output = '					</div>\n';
	$output .= '				</div>\n';
	$output .= '			</div>\n';
	$output .= '		</div>\n';
	$output .= '	</div>\n';
	$output .= '</body>\n';
	$output .= '</html>\n';
	return $output;
}

?>