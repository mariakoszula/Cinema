<?php
	class User extends Controller{
		function __construct(){
			parent ::__construct();

		}
	
	function index(){
			$this->view->getView("user");
		
		}
	public function create(){
				$data['name']='mary';  //$_post['name']
               	$data['last_name']='kosz';
               	$data['role']='client';
               	$data['email']='a';
               	$data['phone']='a';
               	$data['login']='a';
               	$data['password']='wqegqw';
			
			//@TODO Do your error checking!
			$this->model->create($data);
			header('location:'.URL.'/user');
		}
	}
?>
