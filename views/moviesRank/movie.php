<?php
$title = $this->movie['title'];		
$desc = $this->movie['desc'];		
$time = $this->movie['time'];
$movie = $this->movie['mid'];
$user = $_SESSION['user'];
$rate = $this->movie['rated'];
echo "<input type='hidden' id='mid' value='".$movie."'/>";
echo "<table class='center'><tr><td><h1>".$title."</h1></td></tr>";
echo "<tr><td><label>Czas trwania: </label>".$time." min</td></tr>";
echo "<tr><td><label>Opis: </label>".$desc."</td></tr>";
if(empty($rate)){
echo "<form action='".URL."moviesRank/save_rate' method='post'>";
echo "<tr><td>&nbsp</td></tr>";
echo "<tr><td><input type='radio' name='rate' value='1'>1</input>";
echo "<input type='radio' name='rate' value='2'>2</input>";
echo "<input type='radio' name='rate' value='3'>3</input>";
echo "<input type='radio' name='rate' value='4'>4</input>";
echo "<input type='radio' name='rate' value='5'>5</input>";
echo "<input type='hidden' name='user' value='".$user."' />";
echo "<input type='hidden' name='movie' value='".$movie."' />";
echo "&nbsp<button type='submit' name='submit' class='next_small'>Oceń</button></td></tr>";
echo "</table></form>";
}
if(!empty($rate)){
	echo "<tr><td><label>Twoja ocena: </label>".$rate[0]['rate']."</td></tr></table>";
}

?>
<table class="center">
<tr><td>&nbsp</td></tr>
<tr><td><hr></td></tr>
<tr><td><h2>Seanse</h2></td></tr>

	<tr><td><label><strong>Dzień: </strong></label><input type="date" id="data_choice" min="<?php echo date('Y-m-d', strtotime(date('Y/m/d')));?>" name="start_date" value="<?php echo date('Y-m-d', strtotime(date('Y/m/d')));?>">&nbsp<button class='next_small'>Wybierz</button></td>
	</tr><tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td><strong>Godziny: </strong><div id="hours"></div>
	
<?php
echo $_get['day']."</td></tr>";
?>
</table>
