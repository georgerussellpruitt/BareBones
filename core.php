<?php

/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

// global user object
// not used yet

// include the site global
include("site.php");

// call the functions
include($SITE->lib."functions.php");

// call the module loading system
include($SITE->lib."ModuleHandler.class.php");

// closing tag left off intentionally to prevent white space