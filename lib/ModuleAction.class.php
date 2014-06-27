<?php

/**
 * Description of BareBones::ModuleBase
 *
 * @author George Russell Pruitt
 */

class ModuleAction {
    
  public $name			= ''; 		// names the action
	public $action 	= '';			// provides action content

  // constructor
  public function __construct($name){
		$this->name = $name;     
  }
  
  // destruct
  public function __destruct(){
    unset($this);
  }

}