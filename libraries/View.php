<?php
	class View{
		function __construct(){
				
		}
		
		public function getView($name){
				require ("views/header.php");
				require ("views/".$name.".php");
				require ("views/footer.php");
		}
		
	}
?>
