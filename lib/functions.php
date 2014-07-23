<?php

/*
 * @script	functions.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library BareBones
 *
 * Functions file contains site-wide functions
 *
**/



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


/*
 * debug_dump($data)
 * processes a variable of any type into html for debugging
**/
function debug_dump($data,$name = false,$skip_null = false,$nested=false){
	if($nested){
		$output = "<div id='debugging' class='nested_debug'>";
	} else {
		$output = "<div id='debugging' class='debug'>";
	}
	if($name){
		$output .= "<h3>Debugging Info for: $name</h3><br/>";
	} else {
		$output .= "<h3>Debugging Info</h3><br/>";
	}
	foreach($data as $key => $value){
		switch(gettype($value)){
			case "array":
				if($nested){
					$output .= "[<strong>".$key."</strong>]: [Array] <br/>";
				} else {
					$output.= debug_dump($value, $key, false, true)."<br/>";
				}
				break;
			case "object":
				$output.= "\t\t".debug_dump($value, $key, false, true)."<br/>";
				break;
			case "string":
				$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] <br/>";
				break;
			case "boolean":
				$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] <br/>";
				break;
			case "integer":
				$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] <br/>";
				break;
			case "double":
				$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] <br/>";
				break;
			case "resource":
				$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] <br/>";
				break;
			case "NULL":
				$output .= "\t\t[<strong>".$key."</strong>]: [".$value."] <br/>";
				break;
			default:
				$output.= "Variable [".$key."] is: UNKNOWN <br/>";
				break;
		}
	}
	$output .= "</div>";
	return nl2br($output);
}


include("functions_ui.php");

// closing tag left off intentionally to prevent white space