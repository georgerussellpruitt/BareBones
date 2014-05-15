<?php

/**
 * Description of BareBones::ExceptionHandler
 *
 * @author George Russell Pruitt
 */
class ExceptionHandler {

    protected $message = 'Unknown exception';   // exception message
    private   $string;                          // __toString cache
    protected $code = 0;                        // user defined exception code
    protected $file;                            // source filename of exception
    protected $line;                            // source line of exception
    private   $trace;                           // backtrace
    private   $previous;                        // previous exception if nested exception
	
    // put your declarations here
    // constructor
    function __construct() {
        // code here
    }

    // destruct
    function __destruct() {
        // code here
    }

    // add an exception to stack
    function add($e){
        //
        $this.errors($e);
    }
	
	// returns all errors
	function print(){
		$output = '';
		foreach($this.errors as $error){
			$output .= "<pre>The following file: <strong>".$error->file."</strong> produced an exception on line: <strong>".$error->line."</strong> with the following: <strong>".$error->code."</strong>: ".$error->message."</pre>";
		}
		return $output;
	}
}

?>
