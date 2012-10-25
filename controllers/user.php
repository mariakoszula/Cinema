<?php
	class User extends Controller{
		function __construct(){
			parent ::__construct();

		}
	
	function index(){
			$this->view->getView("user");
		
		}
	function test(){
			$this->model->test();
	}
	}
?>
