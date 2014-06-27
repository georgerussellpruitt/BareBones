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

echo debug_dump($REQUEST, get_var_name($REQUEST));
echo debug_dump($ACTIONS, get_var_name($ACTIONS));

echo get_footer();
?>