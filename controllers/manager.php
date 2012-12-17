<?php

	class Manager extends Controller{
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
			$this->view->getView('manager/index');
			
	}
	
	public function listOfUsers(){
			$this->view->listOfUsers = $this->model->listOfUsers();
			$this->view->getView('manager/listOfUsers');
			
	}
	

	public function logout(){
			session_destroy();
			header('location: ../login');
			exit;
	}

	public function create(){

				$data['name']=ucfirst($_POST['name']);
               	$data['last_name']=ucfirst($_POST['last_name']);
               	$data['role']=$_POST['role'];
               	$data['email']=$_POST['email'];
               	$data['phone']=$_POST['phone'];
               	$data['login']=$_POST['login'];
               	$data['password']=md5($_POST['password']);
			
			$this->model->create($data);
			header('location:'.URL.'manager/listOfUsers');
		}
		
	public function delete($id){
		$this -> model ->delete($id);
	}
	public function edit($id){
		$this->view->edit = $this -> model -> edit($id);
		$this->view->getView('manager/edit');
	}

	public function save($id){
				$data['id'] = $id;
				$data['name'] = ucfirst($_POST['name']);
               	$data['last_name'] = ucfirst($_POST['last_name']);
               	$data['role'] = $_POST['role'];
               	$data['email'] = $_POST['email'];
               	$data['phone'] = $_POST['phone'];
               	$data['login'] = $_POST['login'];
               	$data['password'] = md5($_POST['password']);
            $this->model->save($data);
            header('location: '.URL.'manager/listOfUsers');
	}
}
?>
