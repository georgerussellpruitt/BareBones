<?php

/*
 * @script index.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library PHPBareBones
 *
 * Main index file
 *
 * All requests are handled by this script.
 *
 */
 
// config
include("config.php");

echo get_header();
 
echo "<pre>".print_r($CFG)."</pre>";
echo "<pre>".print_r($SITE)."</pre>";

echo get_footer();
?>