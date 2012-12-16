<form method="post" action="<?php echo URL;?>tickets/treserved">
<?
$now=getConvTime("now");
echo "<select name='show'>";
		echo "<option value='0'>Wybierz seans</option>";
		for($i=0; $i<=sizeof($this->index)-1; $i++){
		$time=getConvTime($this->index[$i]['tstart']);
			if($time['y'] == $now['y'] && $time['m'] == $now['m'] && $time['d'] == $now['d']){
				echo "<option value='".$this->index[$i]['id']."' >".$this->index[$i]['title']." ".$time['h'].":".$time['i']."</option>";
			}
		}
	echo "</select>";
	echo "<label>Login: </label><input type='text' name='login'><br/>";
	echo "<button type='submit' class='next'>Szukaj</button>";
?>
</form>
