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
<<<<<<< HEAD
			$this->view->listOfRooms = $this->model->listOfMovies();
			$this->view->getView('movies/index');
=======
			$this->view->listOfRooms = $this->model->listOfRooms();
			$this->view->getView('rooms/index');
>>>>>>> adding_rooms
			
	}

	public function add(){
<<<<<<< HEAD
			/*$name=$_POST['name'];
			$this->view->add = $this->model->add($name);
			$this->view->getView('rooms/index');
			header ('Location: ../rooms');*/
=======
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
		foreach ($_POST as $key => $value){
			if ($key == 'id') $id= array('id' => $value);
			if ($key != 'id'){
			$tmp=explode("S", $key);
			$seat[] = array(
				'row_no' => $tmp[0],
				'seat_no' => $tmp[1],
				'type' => $value);
			}}
			$data = array_merge($id, $seat);
			$this->view->save = $this->model->save($data);
			header('Location: '.URL.'rooms');
			
>>>>>>> adding_rooms
	}
}
?>
