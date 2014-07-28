<?php

/*
 * @script	site.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library BareBones
 *
 * Core system file that creates the highly used $SITE object.
 * $SITE is added to in core.php and accessed throughout the site.
 *
**/

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

// set the $SITE global object
unset($SITE);
$SITE = new stdClass(); // make into object

$SITE->CFG = $CFG;

// useful shortcut
$SITE->lib = $SITE->CFG->dataroot."lib".$SITE->CFG->sep;
$SITE->mod = $SITE->lib."mod".$CFG->sep;

	// this is to be replaced with a value being read from database into $CFG
	$SITE->CFG->current_template = "default";

$SITE->template_include = $CFG->templates.$CFG->sep.$SITE->CFG->current_template.$CFG->sep;
$SITE->template_url = $CFG->url."templates".$CFG->sep.$SITE->CFG->current_template.$CFG->sep;
$SITE->CFG->style = $SITE->template_url."style.css";

// exception handler
include($SITE->lib."ExceptionHandler.class.php");

$SITE->error = new ExceptionHandler();


// closing tag left off intentionally to prevent white space