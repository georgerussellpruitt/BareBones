<?php 


/*
 * get_header($template)
 *
 * pulls header uses default if none provided
 */
function get_header( $template = "default" ) {
	global $SITE;
	$filename = $SITE->template_include."header.php";
	if( file_exists($filename) ){
		require($filename);
	} else {
		throw new Exception("Couldn't load header file: [".$template."]");
	}

}

/*
 * get_footer($template)
 *
 * pulls footer uses default if none provided
 */
function get_footer( $template = "default" ){
	global $SITE;
	$filename = $SITE->template_include."footer.php";
	if( file_exists($filename) ){
		require($filename);
	} else {
		throw new Exception("Couldn't load footer file: [".$template."]");
	}
}

/*
 * get_title()
 *
 * pulls title from the $SITE->CFG->site_title
 */

function get_title(){
	global $SITE;
	return $SITE->CFG->site_title;
}

// closing tag left off intentionally to prevent white space