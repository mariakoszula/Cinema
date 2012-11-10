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
			$data = array();
			$data['title']=$_POST['title'];
			$data['desc']=$_POST['description'];
			$data['time']=$_POST['time'];
			
			$this->view->add = $this->model->add($data);
			//$this->view->getView('rooms/index');
			header ('Location: ../movies');
	}
}
?>
