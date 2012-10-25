<?php
	class View{
		function __construct(){
				
		}
		public function getView($name){
			require_once ("views/footer.php");
			require_once ("views/".$name.".php");
			require_once ("views/header.php");
		}
		
	}
?>
