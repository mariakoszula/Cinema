<?php
	class Rooms extends Controller{
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
			$this->view->listOfRooms = $this->model->listOfRooms();
			$this->view->getView('rooms/index');
			
	}

	public function add(){
			$name=$_POST['name'];
			$this->view->add = $this->model->add($name);
			$this->view->getView('rooms/index');
			header ('Location: ../rooms');
	}
		
	public function delete($id){
		$this -> model ->delete($id);
		header ('Location: '.URL.'rooms');
	}
	public function seats($id){
		$this->view->seats = $this->model->seats($id);
		$this->view->getView('rooms/seats');
	}
		
	public function save(){
			
	}
}
?>
