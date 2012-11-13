<?php
	class Reservation extends Controller{
		function __construct(){
			
			parent ::__construct();
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
			$showing = $_SESSION['show'];
			
			/*if(!isset($showig)){
				session_destroy();
				header('location: '.URL.'index');
				exit;
			}*/
			if($logged == false){
				session_destroy();
				header('location: '.URL.'/login');
				exit;
			}
	}

	
	public function index($id){
		$this->view->seatChoice = $this->model->seatChoice($id);
		$this->view->getView('reservation/index');
	}

	
}
?>
