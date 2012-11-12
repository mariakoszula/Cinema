<?php
require_once "config.php";
function __autoload($class) {
	require LIBS . $class .".php";
	//echo LIBS . $class .".php";
}

$app = new Router();
?>

