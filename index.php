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
 
 echo "<pre>".print_r($CFG)."</pre>";
 echo "<pre>".print_r($SITE)."</pre>";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<?php get_header(); ?>
</head>

</head>
</html>