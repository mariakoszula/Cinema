<?php
	class Index extends Controller{
		function __construct(){
			parent ::__construct();

		}
	
	
	function index(){
			$this->view->getView("index/index");
		}
		
		function test(){
			$this->model->test();
		}
	}
?>
