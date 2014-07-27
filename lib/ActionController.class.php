<?php

/*
 * @script	ActionController.class.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library BareBones
 *
 * Main actions controller
 *
 * This class will handle all internal redirection based on the URI
 *
**/

defined("BAREBONES_CORE") || die("External linking to the file is restricted");


class ActionController {
	
	// Variable Definitions
	public $main_action 	= '';	// request's main action
	private $request 			= '';	// $REQUEST object
	public function __construct($REQUEST) {
		$this->main_action = $REQUEST->main_action;
		$this->request = $REQUEST;
	}

	public function __destruct() {
		//
	}
	
	// loads view associated with action
	public function load_view($action = "home"){
		$action_loc = "view_".$action.".php";
		return $action_loc;
	}
	
}

unset($ACTIONS);
$ACTIONS = new ActionController($REQUEST);

// closing tag left off intentionally to prevent white space