<?php
require ('config.php');
function __autoload($class){
	echo "autoload $class<br/>";
	require_once (LIBS.$class.".php");
	
}
$app = new Router();
?>

