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
include("includes/RequestController.php");

?>

<?php echo get_header(); ?>

<?php

echo htmldump($REQUEST);

?>

<?php echo get_footer(); ?>