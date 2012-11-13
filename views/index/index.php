<?php
	require "public/timeConv.php";
?>
<h1>Dzisiejsze seanse</h1>
<?php
///print_r($this->index[0]);
echo "<table>";
$a = $this->index[0];
//print_r($a);
	for ($i=0; $i<sizeof($this->index); $i++){
		echo "<tr>";
		echo "<td><b>".$this->index[$i]['title']."</b></td>";
		echo "<td>".$this->index[$i]['desc']."</td>";
		$time = getConvTime($this->index[$i]['tstart']);
		echo "<td>".$this->index[$i]['runtime']." min</td>";
		echo "<td><a href=''>".$time['h'].":".$time['i']."</a></td>";
		unset($this->$time);
		echo "</tr>";	
	}

echo "</table>";
?>
