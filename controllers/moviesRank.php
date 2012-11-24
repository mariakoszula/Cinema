<?php
	class MoviesRank extends Controller{
		function __construct(){
			parent::__construct();	
		}
		
		function index(){
			$this->view->getView('moviesRank/index');
			
		}
		
}
	
?>