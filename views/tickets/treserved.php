<table class='center'>
<tr>
<th>Imię i nazwisko</th><th>Tytuł filmu</th><th>Kiedy?</th><th>Czas trwania</th><th>Sala</th>
</tr>
<tr><td><?php echo $this->treserved[0]['name']." ".$this->treserved[0]['lastname']?></td>
	<td><?php echo $this->treserved[0]['title']?></td>
	<td><?php echo $this->treserved[0]['time']?></td>
	<td><?php echo $this->treserved[0]['runtime']?></td>
	<td><?php echo $this->treserved[0]['room']?></td>
</tr>
</table>
<?php
echo "<table class='center'>";
echo "<tr colspan='4'>&nbsp</tr>";
echo "<tr><th>Rząd</th><th>Miejsce</th><th>Zniżka</th><th>Stan</th></tr>";
for($i=sizeof($this->treserved)-1; $i>=0; $i--){
	if($this->treserved[$i]['state'] == ('reserved' || 'sold')){
		echo "<td>".$this->treserved[$i]['row']."</td>";
		echo "<td>".$this->treserved[$i]['seat']."</td>";
		echo "<td>".$this->treserved[$i]['disc']."</td>";
		if($this->treserved[$i]['state'] == 'reserved'){
			echo "<td>zarezerwowany</td>";
			echo "<td><a href=".URL."tickets/sold/".$this->treserved[$i]['id'].">Sprzedaj</a></td></tr>";
		}
		elseif($this->treserved[$i]['state'] == 'sold'){
			echo "<td>kupiony</td></tr>";
		}
}
}
?>
</table>