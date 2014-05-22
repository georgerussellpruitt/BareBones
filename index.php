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

echo get_footer();
?>