<table class="center">
	<tr><th>Miejsce</th><th>Tytuł</th><th>Ocena</th><th>Ilość głosów</th><th>Na ekranie</th></tr>
	<?php 
for($i=0; $i<sizeof($this->index); $i++){
	
	echo "<tr><td>".($i+1)."</td>";
	echo "<td><a href='".URL."moviesRank/movie/".$this->index[$i]['id']."'>".$this->index[$i]['title']."</a></td>";
	echo "<td>".$this->index[$i]['rating']."</td>";
	echo "<td>".$this->index[$i]['votes']."</td>";
	echo "<td>";
		if($this->index[$i]['is_on_screan'] == 1) echo "tak";
	echo "</td>";
	echo "</tr>";
}
?>
</table>

