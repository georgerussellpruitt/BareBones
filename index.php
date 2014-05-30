<?php

/*
 * @script	index.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library BareBones
 *
 * Main index file
 *
 * All requests are handled by this script.
 *
**/
 
// config
include("config.php");

$DEBUG = 1;

// call request controller
include("lib/RequestController.php");

// call site controller
	// site controller handles $REQUEST and executes to the correct action

echo get_header();


//echo debug_dump($REQUEST);

/*
foreach($REQUEST as $key => $value) {
	if( is_array($value) ){
		echo "<pre><strong>[$key]</strong></pre>\n";
		foreach($value as $temp_key => $temp_val) {
			echo "\t<pre>[<strong>".$temp_key."</strong>]: [".$temp_val."]</pre>\n";
		}
	} else {
		echo "<pre>[<strong>".$key."</strong>]: [".$value."]</pre>";
	}
}
*/

echo debug_dump($path_info);
echo debug_dump($REQUEST);

//echo "<pre>".print_r($path_info)."</pre>";

echo get_footer();
?>