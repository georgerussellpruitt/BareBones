<?php
/*
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 */

defined("BAREBONES_CORE") || die("External linking to the file is restricted");

class ModuleHandler {
    
    private function __construct(){
        $this->modules = array();
    }
    
    private function __destruct(){
        //
    }


    public function load($name){
		if( !$this->loaded($name) ){
			// load plugin
			$plugin_loc = $SITE->plugin.$name.".class.php";
			// check if src exists
			if(!file_exists($plugin_loc)){
				throw new Exception("Loading of plugin <strong>$name</strong> failed, file does not exist!", 9001, NULL);
			}
			// require plugin src
			if(!require_once($plugin_loc)){
				throw new Exception("Loading of plugin <strong>$name</strong> failed, require failed!", 9002, NULL);
			}
			// update modules array
			$this->modules[$name] = new $name();
			return TRUE;
		}
		return FALSE;
    }

    public function load2obj($name){
		if (!$this->loaded($name)){
			// load plugin and object
			$plugin_loc = $SITE->plugin.$name.".class.php";
			// check if src exists
			if(!file_exists($plugin_loc)){
				throw new BareBonesException("Loading of plugin <strong>$name</strong> failed, file does not exist!", 9001, NULL);
			}
			// require plugin src
			if(!require_once($plugin_loc)){
				throw new BareBonesException("Loading of plugin <strong>$name</strong> failed, require failed!", 9002, NULL);
			}        
			// make object globally accessible
			global $$name;
			// load plugin into object
			$$name = new $name();
			// update modules array
			$this->modules[$name] = TRUE;
			return TRUE;
		}
		return FALSE;
    }
    
    public function is_loaded($name){
        // check to see if previously loaded
		if($this->modules[$name] != NULL && $this->modules[$name] == TRUE){
			return TRUE;
		}
		else {
			return FALSE;
		}
   }

}

// closing tag left off intentionally to prevent white space