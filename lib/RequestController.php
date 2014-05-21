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

// remove that nasty prepended slash
$REQUEST->original = substr($_SERVER['REQUEST_URI'],1);

// break URI into parts
$REQUEST->parts = explode("?",$REQUEST->original,2);
$REQUEST->base_parts = explode("/",$REQUEST->parts[0]);
$REQUEST->query_parts = explode("&",$REQUEST->parts[1]);
$temp = explode("&",$REQUEST->parts[1]);
foreach($temp as $req_var){
	$temp_array = explode("=",$req_var);
	$REQUEST->parts[$temp_array[0]] = $temp_array[1];
}
?>