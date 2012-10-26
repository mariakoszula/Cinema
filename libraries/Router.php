<?php

	class Router{
		
		function __construct(){
		$path = array_keys($_GET);
		$route = $path[0];
		$routeParts = split("/", $route);
		
		if(empty($routeParts[0])){
			require "controllers/index.php";
			$controller = new Index();
			$controller->index();
			return false;
		}
		
		if(isset($routeParts[0])){
			$path_to_file =  "controllers/".$routeParts[0].".php";
			
			if(file_exists($path_to_file)){
				require $path_to_file;	
			}else $this->error();
			
			$controller = new $routeParts[0];
			$controller->index();
			$controller->loadModel($routeParts[0]);
		}
		echo $routeParts[1];
		if (isset($routeParts[2])){
			if(method_exists($controller, $routeParts[1])){
				$controller->{$routeParts[1]}($routeParts[2]);
			}else{
				$this->error();
			}
		}else{
			if (isset($routeParts[1])){
				if(method_exists($controller, $routeParts[1])){
				 	$controller->{$routeParts[1]}();
				}else  $this->error();
			}else{
				$controller->index();
			}
		
		}
		}
		function error(){
			require 'controllers/error.php';
			$controller = new Error();
			$controller->index();
			return false;
		}
	}
?>
