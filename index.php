<?php

/*
 * @script index.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library PHPBareBones
 *
 * Main index file
 *
 * All requests are handled by this script.
 *
 */
 
// config
include("config.php");

echo get_header();
echo "<ul>\n\r";
foreach($CFG as $key => $value){
	echo "<li>".$key.": ".$value."</li>\n\r";
}
echo "</ul>\n\r";
echo "<ul>\n\r";
foreach($SITE as $key => $value){
	echo "<li>".$key.": ".$value."</li>\n\r";
}
echo "</ul>\n\r";
?>

<?php
echo get_footer();
?>