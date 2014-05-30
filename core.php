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

/*
// call old request controller
include($SITE->lib."RequestController.php");
*/

// call the request handler
include($SITE->lib."RequestController.class.php");
$REQUEST = new RequestController();

// call the site / action controller
include($SITE->lib."ActionController.class.php");

// TODO call the module loading system


// closing tag left off intentionally to prevent white space