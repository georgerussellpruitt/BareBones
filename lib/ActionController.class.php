<?php
/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

class ActionController {
	
	global $DB;
	global $REQUEST;

	public function __construct() {
		//
	}

	public function __destruct() {
		//
	}
	
	// this function will pull the action from the db
	public function load_action(){
	
		// TODO build sql
		
		// TODO execute query
		
		// TODO grab DB record

	}

}


// closing tag left off intentionally to prevent white space