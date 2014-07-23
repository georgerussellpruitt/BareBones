<?php

/*
 * This is the core config file for the BareBones system
 * 
 * This file sets up the inital global object that retains
 * all of the easy access calls to control includes and 
 * easy module and class inclusion
 *
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 *
**/

// TODO REVAMP totally to pull most of this from database

define("BAREBONES_CORE", true);

// set the $CFG global object
unset($CFG);
global $CFG; // make object globally accessible
$CFG = new stdClass(); // make into object

// toggle DEBUG mode
$CFG->debug = true;

// determine OS type
$CFG->ostype = php_uname("s");
if( $CFG->ostype == "Linux" || $CFG->ostype == "FreeBSD" || $CFG->ostype == "Unix") {
	$CFG->sep = "/";
} else {
	$CFG->sep = "\\";
}    

// set configurations
$CFG->dbtype = "";
$CFG->dbname = "";
$CFG->dbhost = "";
$CFG->dbuser = "";
$CFG->dbpass = "";
$CFG->debug = true;
$CFG->ssl = false;
$CFG->domain = $_SERVER['SERVER_ADDR'];
//$CFG->cwd = basename( __DIR__ );
$CFG->cwd = "barebones";
$CFG->dataroot = __DIR__ . "/";
//$CFG->dataroot = "barebones/";
$CFG->url_base = $CFG->domain."/";
$CFG->retained = true;
if($CFG->retained) {
	$CFG->url_base .= $CFG->cwd."/";
}
if($CFG->ssl) {
	$CFG->url = "https://".$CFG->url_base;
} else {
	$CFG->url = "http://".$CFG->url_base;
}
$CFG->style = $CFG->url."style/";

	
if($CFG->debug) {
	error_reporting(E_ALL); // Report all PHP errors (see changelog)
	ini_set('error_reporting', E_ALL);
} else { 
	error_reporting(0);
}


// system core
include("core.php");

// closing tag left off intentionally to prevent white space