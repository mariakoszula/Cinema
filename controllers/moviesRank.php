<?php
	class MoviesRank extends Controller{
		function __construct(){
			parent::__construct();	
			
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
			$user = $_SESSION['user'];
			if(isset($_SESSION['ticket'])) session_unset ($_SESSION['ticket']);
			if(isset($_SESSION['show'])) session_unset ($_SESSION['show']);
			if($logged == false || $role != ('manager' || 'worker' || 'client')){
				session_destroy();
				header('location: ../login');
				exit;
			}
		}
		
		public function index(){
			$this->view->index = $this->model->index();
			$this->view->getView('moviesRank/index');
			
		}
		
		public function movie($id){
			$this->view->movie = $this->model->movie($id);
			$this->view->getView('moviesRank/movie');
		}
		
		public function save_rate(){
			if(isset($_POST['submit'])){
				$data['user'] = $_POST['user'];
				$data['rate'] = $_POST['rate'];
				$data['movie'] = $_POST['movie'];
				$this->model->save_rate($data);
				header("location: movie/".$data['movie']."");
			}else header('location: movie');
			
		}

		
		

}
	
?>