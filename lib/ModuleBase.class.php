<?php

/**
 * Description of BareBones::ModuleBase
 *
 * @author George Russell Pruitt
 */

// Grab all required Module Libraries
require_once($SITE->lib."ModuleAction.class.php");

class ModuleBase {
    
    // Variable Definitions
    public $name 		= '';							// string for naming the module
    public $actions	= array(); 				// array containing available actions
    

    // constructor
    public function __construct($name){
        
        // TODO implement error/exception handling
        //$this->errors = new ErrorHandler();
        
        $this->name = $name;
        
    }
    
    // destruct
    public function __destruct(){
        // code here
    }

		public function createAction($name){
			$this->actions[] = new ModuleAction($name);
		}
    
    public function outputActions(){
    	$outputActions = '';
    	foreach($this->actions as $action){
    		$outputActions .= $action->name."<br/>";
    	}
    	return $outputActions;
    }
}

?>
