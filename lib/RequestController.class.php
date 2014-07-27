<?php
/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

class RequestController {
	
	public $base = '';
	public $call = '';
	public $call_parts = array();
	public $query = '';
	public $query_parts = array();
	public $uri = ''; // used as base through script
	public $main_action = ''; // contains the main action call
	
	public function __construct() {
		
		// pull uri from server
		if(isset( $_SERVER['REQUEST_URI'] )) {
			$this->uri = utf8_decode(urldecode($_SERVER['REQUEST_URI']));
		}
		
		// run process method
		$this->process_request();
		
		// set main action
		if(!empty($this->query_parts['action'])){
			$this->main_action = $this->query_parts['action'];
		} else {
			$this->main_action = "home";
		}
	}

	public function __destruct() {
		//
	}

	private function process_request(){
		if(!empty($this->uri)){
			
			// breakdown uri by ?
			$request_path = explode('?', $this->uri);
			
			// get requested script name (hopefully blank)
			$this->base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
			
			// uri before the ?
			$this->call = substr($request_path[0], strlen($this->base) + 1);
			if ($this->call == basename($_SERVER['PHP_SELF'])) {
				$this->call = '';
			}
			
			// separate parts
			$this->call_parts = explode('/', $this->call);
			
			// full query after the ?
			$this->query = $request_path[1];

			// query parts array
			$vars = explode('&', $this->query);
			foreach ($vars as $var) {
				$t = explode('=', $var);
				$this->query_parts[$t[0]] = $t[1];
			}
		}
	}

}

unset($REQUEST);
$REQUEST = new RequestController();

// closing tag left off intentionally to prevent white space