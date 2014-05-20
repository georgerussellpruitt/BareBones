<?php

/*
 * @script	RequestHandler.php
 * @author: George Russell Pruitt <pruitt.russell@gmail.com>
 * @library BareBones
 *
 * Main Request Controller
 *
 * All requests are handled by this script.
 *
**/

// global declaration
unset($REQUEST);
global $REQUEST;

// remove that nasty prepended slash
$REQUEST = substr($_SERVER['REQUEST_URI'],1);

?>