<?php
	class Register extends Controller{
		function __construct(){
			parent ::__construct();
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
			
			if($logged == true){
				session_destroy();
				header('location: login');
				exit;
			}
	}

	
	public function index(){
			$this->view->getView('register/index');
	}
	
	public function create(){
				$this->view->msg;
				$data['name']=$_POST['name'];
               	$data['last_name']=$_POST['last_name'];
               	$data['email']=$_POST['email'];
               	$data['phone']=$_POST['phone'];
               	$data['login']=$_POST['login'];
               	$data['password']=md5($_POST['password']);
			
			$this->model->create($data);
			//header('location:'.URL.'register/index');
		}
		
}
?>
