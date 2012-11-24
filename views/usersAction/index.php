<?php
	require "public/timeConv.php";
	date_default_timezone_set('Europe/Warsaw');
		$now = new DateTime("now");
		$now = $now->format('d.m.Y H:i:s');
?>

<table class='center'>
<tr>
<th>Tytuł filmu</th><th>Kiedy?</th><th>Czas trwania</th><th>Sala</th><th>Rząd</th><th>Miejsce</th><th>Zniżka</th><th>Stan</th>
</tr>
<?php 
for($i=sizeof($this->index)-1; $i>=0; $i--){
	
	echo "<tr><td>".$this->index[$i]['title']."</td>";
	echo "<td>".$this->index[$i]['time']."</td>";
	echo "<td>".$this->index[$i]['runtime']."</td>";
	echo "<td>".$this->index[$i]['room']."</td>";
	echo "<td>".$this->index[$i]['row']."</td>";
	echo "<td>".$this->index[$i]['seat']."</td>";
	echo "<td>".$this->index[$i]['disc']."</td>";
	
	if($this->index[$i]['time'] >= $now){
	echo "<td>".$this->index[$i]['state']."</td>";
		if($this->index[$i]['state']=='reserved'){
			echo "<td><a href=".URL."usersAction/cancel/".$this->index[$i]['id'].">Anuluj</a></td>";
		}
	}else echo "<td>history</td>";
	
	echo "</tr>";

}
?>
</table>