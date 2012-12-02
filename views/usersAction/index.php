<?php
		$now = new DateTime('now');	
?>

<table class='center'>
<tr>
<th>Tytuł filmu</th><th>Kiedy?</th><th>Czas trwania</th><th>Sala</th><th>Rząd</th><th>Miejsce</th><th>Zniżka</th><th>Stan</th>
</tr>
<?php

for($i=sizeof($this->index)-1; $i>=0; $i--){
	$d = $this->index[$i]['time'];
	$date = new DateTime($d);
	
	if($this->index[$i]['state'] == ('reserved' || 'sold') && $date >= $now){
		echo "<tr><td>".$this->index[$i]['title']."</td>";
		echo "<td>".$this->index[$i]['time']."</td>";
		echo "<td>".$this->index[$i]['runtime']."</td>";
		echo "<td>".$this->index[$i]['room']."</td>";
		echo "<td>".$this->index[$i]['row']."</td>";
		echo "<td>".$this->index[$i]['seat']."</td>";
		echo "<td>".$this->index[$i]['disc']."</td>";
		if($this->index[$i]['state'] == 'reserved'){
			echo "<td>zarezerwowany</td>";
			echo "<td><a href=".URL."usersAction/cancel/".$this->index[$i]['id'].">Anuluj</a></td>";
		}
		elseif($this->index[$i]['state'] == 'sold'){
			echo "<td>kupiony</td>";
		}
		echo "</tr>";
	}
	elseif($date < $now &&  $this->index[$i]['state'] == 'sold'){
		echo "<tr><td>".$this->index[$i]['title']."</td>";
		echo "<td>".$this->index[$i]['time']."</td>";
		echo "<td>".$this->index[$i]['runtime']."</td>";
		echo "<td>".$this->index[$i]['room']."</td>";
		echo "<td>".$this->index[$i]['row']."</td>";
		echo "<td>".$this->index[$i]['seat']."</td>";
		echo "<td>".$this->index[$i]['disc']."</td>";
		echo "<td>historia</td>";
	}
}
?>
</table>