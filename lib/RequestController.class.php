<?php
/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

class RequestController {
	
	public $base = '';
	public $call_utf8 = '';
	public $call = '';
	public $call_parts = array();
	public $query_utf8 = '';
	public $query = '';
	public $query_vars = array();

	public function __construct() {
		//echo '<p>'. __CLASS__ . ' was initiated.</p>'; 
		$this->parse_path();
	}

	public function __destruct() {
		//
	}
	
	private function parse_path() {
		$path = array();
		if (isset($_SERVER['REQUEST_URI'])) {
			$request_path = explode('?', $_SERVER['REQUEST_URI']);

			$this->base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
			$this->call_utf8 = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
			$this->call = utf8_decode($path['call_utf8']);
			if ($this->call == basename($_SERVER['PHP_SELF'])) {
				$this->call = '';
			}
			$this->call_parts = explode('/', $path['call']);
			$this->query_utf8 = urldecode($request_path[1]);
			$this->query = utf8_decode(urldecode($request_path[1]));
			$vars = explode('&', $this->query);
			foreach ($vars as $var) {
				$t = explode('=', $var);
				$this->query_vars[$t[0]] = $t[1];
			}
		}
	}

}