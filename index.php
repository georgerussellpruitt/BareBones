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
require("config.php");

// all preheader processing must be completed before the next line
try{
	get_header();
} catch (Exception $e) {
	$SITE->error->add($e);
}

$view_loc = $SITE->ACTIONS->load_view($SITE->ACTIONS->main_action);
if( file_exists($view_loc) ){
	require($view_loc);
} else {
	die("Couldn't load required libraries: $view_loc");
}

try{
	get_footer();
} catch (Exception $e) {
	$SITE->error->add($e);
}
?>