
<h1>Dzisiejsze seanse</h1>
<?php

echo "<table class='center'>";
$a = $this->index[0];
	for ($i=0; $i<sizeof($this->index); $i++){
		echo "<tr>";
		echo "<td><img class='im_small' src='".URL."public/Images/posters/".$this->index[$i]['title'].".jpg' alt='Obrazek'/></td>";
		echo "<td><b>".$this->index[$i]['title']."</b></td>";
		echo "<td>".$this->index[$i]['desc']."</td>";
		$time = getConvTime($this->index[$i]['tstart']);
		echo "<td>".$this->index[$i]['runtime']." min</td>";
		echo "<td><a href='reservation/index/".$this->index[$i]['id']."'>".$time['h'].":".$time['i']."</a></td>";
		echo "</tr>";	
	}

echo "</table>";
?>
