<?php

	class Showing extends Controller{
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
			$this->view->getView('showing/index');
	}
	
	public function shows(){
			$movie = $_POST['movie'];
			$this->view->shows = $this->model->shows($movie);
			$this->view->getView('showing/shows');
	}
	public function save_show(){
		//echo $_POST['movie'];
		//echo $_POST['start_date'];
		//$this->view->save_show();
	}
	
	public function add_movie(){
			$data = array();
			$data['title']=$_POST['title'];
			$data['desc']=$_POST['description'];
			$data['time']=$_POST['time'];
			
			$this->view->add_movie = $this->model->add_movie($data);
			header ('Location: ../showing');
	}
}
?>
