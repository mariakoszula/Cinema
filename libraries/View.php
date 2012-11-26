<?php
	class View{
		function __construct(){
				
		}
		
		public function getView($name, $d = true){
			if($d == true){
				require ("views/header.php");
				require ("views/".$name.".php");
				require ("views/footer.php");
			}
			if($d == false){
				require ("views/".$name.".php");
			}
		}
		
	}
?>
