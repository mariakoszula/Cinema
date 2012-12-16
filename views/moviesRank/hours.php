
<?php
require "public/timeConv.php";
require "../../bootstrap.php";

$wybrana_data=$_GET['day'];
$mid = $_GET['mid'];
$time_choice = getConvTime($wybrana_data);
$time_now = date('Y-m-d');
$time_now = getConvTime($time_now);
$dql = "SELECT s.id, s.tstart from Showing s WHERE s.movie=".$mid; 
		$time = $em -> createQuery($dql);
		$res = $time->getResult();

	
$flag = false;
$dates = array();
for ($i=0; $i<sizeof($res); $i++){
	foreach($res[$i] as $key => $value){
	
	if($key == 'tstart'){
		$time = getConvTime($value);
		if( $time[y] == $time_choice[y] && $time[m] == $time_choice[m] && $time[d] == $time_choice[d]){
			echo "<a href='".URL."reservation/index/".$res[$i]['id']."'>".$time[h].":".$time[m]."</a>&nbsp";
			$flag = true;
		}elseif($time>=$time_now){
			array_push($dates, $time);
		} 
	}
	}
}
if($flag == false && !empty($dates)){
	 	echo "brak<br/><br/>Niestety nie ma w tym dniu seanów dla danego filmu. <br/>";
 		echo "Najbliższe seanse: ";
 		for($i=0; $i<sizeof($dates); $i++){
 			echo "<strong>".$dates[$i][d].".".$dates[$i][m].".".$dates[$i][y]."&nbsp</strong>";
 		}
}
if($flag == false && empty($dates)) echo "<td>brak</td><td>Niestety nie ma w tej chwili żadnych seansów dla tego filmu.</td><td>Aby uzyskać więcej infromacji prosimy skontaktować się z kasą kina.</td></tr>";

?>

