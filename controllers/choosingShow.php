<?php
class ChoosingShow extends Controller{
		function __construct(){
			parent ::__construct();

		}
	
	
	function index(){
			$this->view->index = $this->model->index();
			$this->view->getView("choosingShow/index");
		}
	
}
?>
