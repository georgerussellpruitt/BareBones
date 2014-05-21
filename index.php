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

$DEBUG = 1;
include("config.php");

// call request handler


// call controller
include("lib/RequestController.php");

?>

<?php echo get_header(); ?>

<?php

echo debug_dump($REQUEST);

foreach($REQUEST->parts as $key => $value) {
	echo "<pre>[<strong>".$key."</strong>]: [".$value."]</pre>";
}

?>

<?php echo get_footer(); ?>