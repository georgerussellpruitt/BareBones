<?php

/*
 * George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

// set the $SITE global object
unset($USER);
global $USER; // make globally accessible
$USER = new stdClass(); // make into object

// closing tag left off intentionally to prevent white space