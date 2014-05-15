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
 */

define("BAREBONES_CORE", true);



// set the $CFG global object
unset($CFG);
global $CFG; // make object globally accessible
$CFG = new stdClass(); // make into object

// toggle DEBUG mode
$CFG->debug = true;

// determine OS type
$CFG->ostype = php_uname("s");
if( $CFG->ostype == "Linux" || $CFG->ostype == "FreeBSD" || $CFG->ostype == "Unix")
    {
        $CFG->sep = "\\";
    }
else
    {
        $CFG->sep = "/";
    }
    

// set configurations
    $CFG->dbtype = "";
    $CFG->dbname = "";
    $CFG->dbhost = "";
    $CFG->dbuser = "";
    $CFG->dbpass = "";
    $CFG->debug = true;
    $CFG->ssl = false;
    $CFG->domain = "georgerussellpruitt.kd.io";
    $CFG->cwd = "barebones";
    $CFG->dataroot = __DIR__;
    if($CFG->ssl)
        {
            $CFG->wwwroot = "https://".$CFG->domain."/".$CFG->cwd;
        }
    else
        {
            $CFG->wwwroot = "http://".$CFG->domain."/".$CFG->cwd;
        }

if($CFG->debug)
    {
        // Report all PHP errors (see changelog)
        error_reporting(E_ALL);
    }
else
    {
        error_reporting(0);
    }

// system core
include($SITE->src."core.php");