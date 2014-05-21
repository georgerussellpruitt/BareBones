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
	$output .= '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>';
	$output .= "\n\r";
	$output .= '<link rel="stylesheet" type="text/css" href="'.$CFG->style.'style.css">';
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
	$output .= "\n\r";
	return $output;
}


/*
 * htmldump($data)
 *
 * processes an array into html for debugging
 *
**/
function debug_dump($data,$skip_null = false){

	if ( is_string($data) ) {
	// parse as <pre>
		$output = "<p class='debug'>\n";
		$output .= $data."\n";
		$output .= "</p>\n";
	} else if ( is_object($data) ) {
		$output = "\t<div id='debugging' class='debug'>\n\r";
		if($skip_null){
			$output .= "\t\t<span ".'style="color:#f00;"'.">All null values being skipped</span>\n\r";
		}
		foreach ($data as $key => $value) {
			if( $skip_null ){
				if( !empty($value) ) {
					$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] \n\r";
				}
			} else {
				$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] \n\r";
			}
		}
		$output .= "\t</div>\n\r";
	}	else {
		if ( is_array($data[0]) ) {
			foreach($data as $array) {
				$output = "\t<div id='debugging' class='debug'>\n\r";
				if($skip_null){
					$output .= "\t\t<span>All null values being skipped</span>\n\r";
				}
				foreach ($data as $key => $value) {
					if( $skip_null ){
						if( !empty($value) ) {
							$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] \n\r";
						}
					} else {
						$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] \n\r";
					}
			}
				$output .= "\t</div>\n\r";
			}
		} else { // parse as $key => $value	
			$output = "\t<div id='debugging' class='debug'>\n\r";
			if($skip_null){
				$output .= "\t\t<span>All null values being skipped</span>\n\r";
			}
			foreach ($data as $key => $value) {
				if( $skip_null ){
					if( !empty($value) ) {
						$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] \n\r";
					}
				} else {
					$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] \n\r";
				}
			}
			$output .= "\t</div>\n\r";
		}
	}
	return nl2br($output);

	//return $output;
}
?>