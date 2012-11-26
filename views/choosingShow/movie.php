
<?php

$wybrana_data=$_GET['date'];
require "../../bootstrap.php";
$dql = "SELECT m.title, m.desc, m.runtime, s.id from Movie m, Showing s WHERE s.tstart='".$wybrana_data."' AND s.movie=m.id"; 
		$movie = $em -> createQuery($dql);
		$res = $movie->getResult();

echo "<br/><table class='center'>";
	echo "<tr>";
	echo "<th>Tytuł filmu</th><th>Opis</th><th>Czas trwania</th>";
	for($i=0; $i<=sizeof($res)-1; $i++){
	echo "<tr>";
		echo "<td><b>".$res[$i]['title']."</b></td>";
		echo "<td>".$res[$i]['desc']."</td>";
		echo "<td>".$res[$i]['runtime']." min</td>";
			echo "<td><a href='reservation/index/".$res[$i]['id']."'>Wybierz</a></td>";
		echo "</tr>";	
	
	}
	echo "</table><br/><br/>";

?>
