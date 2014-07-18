<?php
/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");


class ActionController {
	
	// Variable Definitions
	public $main_action 	= '';	// pulls in request's main action
	public $request 			= '';	// request data

	public function __construct($REQUEST) {
		$this->main_action = $REQUEST->main_action;
		$this->request = $REQUEST;
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
		// code goes here
	}
}

unset($ACTIONS);
$ACTIONS = new ActionController($REQUEST);
global $ACTIONS;

// closing tag left off intentionally to prevent white space