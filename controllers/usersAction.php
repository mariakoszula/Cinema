<?php

	class UsersAction extends Controller{
		function __construct(){
			parent ::__construct();
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
			$user = $_SESSION['user'];
			
			if($logged == false || $role != ('client' || 'worker') ||  !isset($user)){
				session_destroy();
				header('location: ../login');
				exit;
			}
	}
	
	public function index(){
		$id = $_SESSION['user'];
		$this->view->index = $this->model->index($id);
		$this->view->getView('usersAction/index');
			
	}

	public function edit(){
		$id = $_SESSION['user'];
		$this->view->edit = $this -> model -> edit($id);
		$this->view->getView('usersAction/edit');
	}

	public function save($id){
				$data['id'] = $id;
				$data['name'] = ucfirst($_POST['name']);
               	$data['last_name'] = ucfirst($_POST['last_name']);
               	$data['email'] = $_POST['email'];
               	$data['phone'] = $_POST['phone'];
               	$data['login'] = $_POST['login'];
               	$data['password'] = md5($_POST['password']);
            $this->model->save($data);
           header('location: '.URL.'usersAction/index');
	}
	
	public function cancel($id){
		$this->model->cancel($id);
		 header('location: '.URL.'usersAction/index');
	}
	
}
?>
