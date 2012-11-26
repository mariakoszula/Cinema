<?php
class ChoosingShow extends Controller{
		function __construct(){
			parent ::__construct();
			session_start();
			$logged = $_SESSION['loggedIn'];
			$role =  $_SESSION['role'];
			$user = $_SESSION['user'];
			if(isset($_SESSION['ticket'])) unset ($_SESSION['ticket']);
			if(isset($_SESSION['show'])) unset ($_SESSION['show']);
				/*if($logged == false){
				session_destroy();
				header('location: '.URL.'login');
				exit;
			}
*/
		}
	
	
	function index(){
			$this->view->index = $this->model->index();
			$this->view->getView("choosingShow/index");
		}
	
}
?>
