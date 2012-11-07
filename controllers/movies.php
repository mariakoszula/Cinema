<?php

	class Movies extends Controller{
		function __construct(){
			
			parent ::__construct();
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
			
			if($logged == false || $role != 'manager'){
				session_destroy();
				header('location: ../login');
				exit;
			}
	}

	
	public function index(){

			$this->view->listOfMovies = $this->model->listOfMovies();
			$this->view->getView('movies/index');

			
	}

	public function add(){

			/*$name=$_POST['name'];
			$this->view->add = $this->model->add($name);
			$this->view->getView('rooms/index');
			header ('Location: ../rooms');*/
	}
}
?>
