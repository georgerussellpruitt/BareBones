<?php


/*
 * debug_dump($data)
 * processes an array into html for debugging
**/
function debug_dump($data,$name = false,$skip_null = false){
	$output = "\t<div id='debugging' class='debug'>\n\r";
	if($name){
		$output .= "\t\t<h3>Debugging Info for: $name</h3>\n\r";
	} else {
		$output .= "\t\t<h3>Debugging Info</h3>\n\r";
	}
	if ( is_string($data) ) {
		$output = "<pre>$data</pre>\n";
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
	return nl2br($output);
	//return $output;
}

/*
 * get_var_name($data)
 * searches var globals for a match (only works on global scope)
**/
function get_var_name(&$var) {
	global $GLOBALS;
	$ret = '';
	$tmp = $var;
	$var = md5(uniqid(rand(), TRUE));

	$key = array_keys($GLOBALS);
	foreach ( $key as $k )
	if ( $GLOBALS[$k] === $var ) {
	$ret = $k;
	break;
	}

	$var = $tmp;
	return $ret;
}


include("functions_ui.php");

// closing tag left off intentionally to prevent white space