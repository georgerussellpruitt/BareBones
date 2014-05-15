<?php

/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

// set the $SITE global object
unset($SITE);
global $SITE; // make globally accessible
$SITE = new stdClass(); // make into object

// useful shortcut
$SITE->lib = $CFG->dataroot."lib".$CFG->sep;