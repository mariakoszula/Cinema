<?php

	class ManageShows extends Controller{
		function __construct(){
			
			parent ::__construct();
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
						
			if($logged == false || $role != ('manager' || 'worker')){
				session_destroy();
				header('location: ../login');
				exit;
			}
	}

	public function index(){
			$this->view->listOfMovies = $this->model->listOfMovies();
			$this->view->getView('manageShows/index');
	}
	
	public function shows(){
			$movie = $_POST['movie'];
			$this->view->shows = $this->model->shows($movie);
			$this->view->getView('manageShows/shows');
	}
	public function save_show(){
		//session_start();
		//echo $_SESSION['movie'];
		$data['movie'] = $_POST['movie'];
		$date = $_POST['start_date'];
		$hour = $_POST['hour'];
		$data['start_time']=  $date." ".$hour;
		$data['room'] =  $_POST['sala'];
		$data['bprice'] = $_POST['bprice'];
		$this->model->save_show($data);
		//$this->view->save_show = $this->model->save_show($data);
		//header ('Location: ../manageShows');
	}
	
	public function add_movie(){
			$data = array();
			$data['title']=$_POST['title'];
			$data['desc']=$_POST['description'];
			$data['time']=$_POST['time'];
			$data['category']=$_POST['category'];
			$this->view->add_movie = $this->model->add_movie($data);
			header ('Location: ../manageShows');
	}

}
?>
