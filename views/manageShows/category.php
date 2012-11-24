
<?php
require_once ("../../bootstrap.php");
		$dql = "SELECT c.id, c.name from Category c order by c.name"; 
		$cat = $em -> createQuery($dql);
		$res = $cat->getResult();
		echo "<option value=''></option>";
		for($i=0; $i<sizeof($res)-1; $i++){
			echo "<option value='". $res[$i]['id']."'>".$res[$i]['name']."</option>";
		}
?>