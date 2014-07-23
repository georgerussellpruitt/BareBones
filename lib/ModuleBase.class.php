<?php

/**
 * Description of BareBones::ModuleBase
 *
 * @author George Russell Pruitt
 */

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
    
    public function getName(){
    	return $this->name;
    }

}
