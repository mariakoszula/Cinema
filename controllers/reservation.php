<?php
	class Reservation extends Controller{
		function __construct(){
			
			parent ::__construct();
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
			$user = $_SESSION['user'];
	//		$ticket = $_SESSION['ticket'];
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
	
	public function discountChoice(){
			foreach ($_POST as $key => $value){
			$tmp=explode("S", $value);
			
			$ticket[] =  array('id' => $key,
							'row_no' => $tmp[0],
							'seat_no' => $tmp[1],
							'user' => $_SESSION['user'],
							'discount' => '',
							'type' => ''
			);}

			$this->view->discountChoice = $this->model->discountChoice($ticket);
			$this->view->getView('reservation/discountChoice');
	}
	
}
?>
