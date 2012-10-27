<?php
require ('config.php');

//function __autoload($class){
	//require_once (LIBS.$class.".php");
	require_once (LIBS."Controller.php");
	require_once (LIBS."Router.php");
	require_once (LIBS."View.php");
	//require_once (LIBS."Model.php");
	require_once ("entities/Users.php");		 
	

	//}

$app = new Router();
?>

