<?php
	class Login extends Controller{
		function __construct(){
			parent::__construct();	
		}
		
		function index(){
			$this->view->getView('login/index');
			
		}
		
		function check(){
			$this->model->check();
		}
	}
	
?>