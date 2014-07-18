<?php

/*
 * @script	index.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library BareBones
 *
 * Main index file
 *
 * All requests are handled by this script.
 *
**/
 
// config
include("config.php");

$DEBUG = 1;


echo get_header();

//echo debug_dump($ACTIONS, get_var_name($ACTIONS));

/*
foreach($REQUEST->query_parts as $key => $value){
	echo "key: [".$key."] = [".$value."]<br/>";
}
echo "query_parts[0]: [".$REQUEST->query_parts[0]."] <br/>";
echo "main_action: [".$REQUEST->main_action."] <br/>";
*/
include($SITE->lib."/mod/TestModule.class.php");

echo "<p><strong>TestModule Actions:</strong><br/>".$TestModule->outputActions()."</p>";

echo "main_action: [".$ACTIONS->request->main_action."]<br/>";

echo get_footer();
?>