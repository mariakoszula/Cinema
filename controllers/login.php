<?php
	class Login extends Controller{
		function __construct(){
			parent::__construct();	
		}
		
		function index(){
			$this->view->getView('login/index');
			
		}
		public function logout(){
			session_destroy();
			header('location: ../login');
			exit;
		}
		
		function check(){
			$this->model->check();
		}
		
	}
	
?>