<?php


/*
 * debug_dump($data)
 *
 * processes an array into html for debugging
 *
**/
function debug_dump($data,$skip_null = false){
	$output = "\t<div id='debugging' class='debug'>\n\r";
	$output .= "\t\t<h3>Debugging Info</h3>\n\r";
	if ( is_string($data) ) {
		$output = "<p class='debug'>\n";
		$output .= $data."\n";
		$output .= "</p>\n";
	} else if ( is_object($data) ) {
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
		if ( is_array(@$data[0]) ) {
			foreach($data as $array) {
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

/**
 *
 * parse_path()
 *
 * used by request controller
 *
**/

function parse_path() {
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $request_path = explode('?', $_SERVER['REQUEST_URI']);

    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);

    $path['query_utf8'] = urldecode($request_path[1]);
    $path['query'] = utf8_decode(urldecode($request_path[1]));
    $vars = explode('&', $path['query']);
    foreach ($vars as $var) {
      $t = explode('=', $var);
      $path['query_vars'][$t[0]] = $t[1];
    }
  }
	return $path;
}


include("functions_ui.php");

// closing tag left off intentionally to prevent white space