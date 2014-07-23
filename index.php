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

// all preheader processing must be completed before the next line
echo get_header();

include($SITE->lib."/mod/TestModule.class.php");


echo debug_dump($SITE);

if($SITE->error->has_errors()){
	echo $SITE->error->display();
}
echo get_footer();
?>