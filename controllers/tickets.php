<?php
class Tickets extends Controller{
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
	
	function index(){
			$this->view->index = $this->model->index();
			$this->view->getView("tickets/index");
		}
	function treserved(){
		if(isset($_POST['show']) && isset($_POST)){
		$show=$_POST['show'];
		$login = $_POST['login'];
		session_start();
		$_SESSION['login']=$login;
		$_SESSION['show']=$show;
		}else{
			$login=$_SESSION['login'];
			$show=$_SESSION['show'];
		}
		
		$this->view->treserved = $this->model->treserved($show, $login);
		$this->view->getView("tickets/treserved");
	}

	function sold($id){
		$this->model->sold($id);
		header('location: '.URL.'tickets/treserved');
	}
	
	function ticketAv(){
		$this->model->ticketAv();
	}
}
?>
