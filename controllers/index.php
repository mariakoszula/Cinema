<?php
	class IndexController extends Controller{
		function __construct(){
			parent ::__construct();

		}
	
	
	function index(){
			$this->view->getView("index");
		}
		
		function test(){
			$this->model->test();
		}
	}
?>
