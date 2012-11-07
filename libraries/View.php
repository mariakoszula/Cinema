<?php
	class View{
		function __construct(){
				
		}
		/*public function getView($name, $noInclude = false){
			
			if($noInclude == true){
				require ("views/".$name.".php");
			}else{
				require ("views/header.php");
				require ("views/".$name.".php");
				require ("views/footer.php");
			}
		}*/
		
		public function getView($name){
				require ("views/header.php");
				require ("views/".$name.".php");
				require ("views/footer.php");
		}
		
	}
?>
