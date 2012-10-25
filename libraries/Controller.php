<?php

	class Controller{
		function __construct(){
			$this -> view = new View();
		
		}
		public function loadModel($name){
		$path_to_file = 'models/'.$name.'Model.php';
		if (file_exists($path_to_file)){
			require $path_to_file;
			$modelName=$name.'Model';
			$this->model = new $modelName;
		}
	}
	}
?>
