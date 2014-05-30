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
	// TODO fix to pull templates
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
	$output = '<!DOCTYPE html>';
	$output .= "\n\r";
	$output .= '<html>';
	$output .= "\n\r";
	$output .= '<head>';
	$output .= "\n\r";
	$output .= '<title></title>';
	$output .= "\n\r";
	$output .= '<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>';
	$output .= "\n\r";
	$output .= '<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>';
	$output .= "\n\r";
	$output .= '<link rel="stylesheet" type="text/css" href="'.$CFG->url.'style.css">';
	$output .= "\n\r";
	$output .= '</head>';
	$output .= "\n\r";
	$output .= '<body>';
	$output .= "\n\r";
	$output .= '	<div id="container-wrapper">';
	$output .= "\n\r";
	$output .= '		<div id="container">';
	$output .= "\n\r";
	$output .= '			<div id="header-wrapper">';
	$output .= "\n\r";
	$output .= '				<div id="header"></div>';
	$output .= "\n\r";
	$output .= '			</div>';
	$output .= "\n\r";
	$output .= '			<div id="content-wrapper">';
	$output .= "\n\r";
	$output .= '				<div id="content">';
	$output .= "\n\r";
	return $output;
}

/*
 * 
 * get_footer($template)
 *
 * pulls footer uses default if none provided
 *
 */
function get_footer( $template = false ){
	// TODO fix to pull templates
	global $CFG;
	$output = '					</div>';
	$output .= "\n\r";
	$output .= '				</div>';
	$output .= "\n\r";
	$output .= '			</div>';
	$output .= "\n\r";
	$output .= '		</div>';
	$output .= "\n\r";
	$output .= '	</div>';
	$output .= "\n\r";
	$output .= '</body>';
	$output .= "\n\r";
	$output .= '</html>';
	return $output;
}


// closing tag left off intentionally to prevent white space