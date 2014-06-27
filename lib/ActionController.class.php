<?php
/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

class ActionController {

	public function __construct() {
		//
	}

	public function __destruct() {
		//
	}
	
	// pull the action from the db
	public function load_action($action){
	
		// TODO build sql
		
		// TODO execute query
		
		// TODO grab DB record

	}
	
	// load view method
	public function load_view(){
		//
	}
	
}

unset($ACTIONS);
$ACTIONS = new ActionController();
global $ACTIONS;
// closing tag left off intentionally to prevent white space