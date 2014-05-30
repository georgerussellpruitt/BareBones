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


echo get_header();

echo debug_dump($REQUEST);

echo get_footer();
?>