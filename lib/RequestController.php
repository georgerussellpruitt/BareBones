<?php

/*
 * @script	RequestHandler.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library BareBones
 *
 * Main Request Controller
 *
 * All requests are handled by this script.
 *
**/

// global declaration
unset($REQUEST);
global $REQUEST;
$REQUEST = new stdClass(); // make into object

$path_info = parse_path();

// remove that nasty prepended slash

// break URI into parts
$parts[0] = $path_info['call'];
$parts[1] = $path_info['query'];

if( !empty($parts[0]) ){
	$REQUEST->base_parts = explode("/",$parts[0]);
	if( empty( $REQUEST->base_parts[ count($REQUEST->base_parts)-1 ] ) ){
		unset( $REQUEST->base_parts[ count($REQUEST->base_parts)-1 ] );
	}
}
if( !empty($parts[1]) ){
	$REQUEST->query_parts = explode("&",$parts[1]);
	$temp = explode("&",$parts[1]);
	foreach($temp as $req_var){
		$temp_array = explode("=",$req_var);
		$REQUEST->$temp_array[0] = $temp_array[1];
	}
}


// closing tag left off intentionally to prevent white space