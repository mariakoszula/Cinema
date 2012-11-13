
<h1>Dzisiejsze seanse</h1>
<?php
echo "<table>";
foreach ($this->todaysShows as $key => $value){
		echo "<tr>";
		echo "<td>".$value['name']."</td>";
		echo "<td><a href='".URL."rooms/seats/".$value['id']."'>Rozkład siedzeń</a> <a href='".URL."rooms/delete/".$value['id']."'>Usuń</a></td>";
		echo "</tr>";
		}
echo "</table>";
?>
