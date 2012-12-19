
<form class='form-two' id='center' method="post" action="<?php echo URL;?>tickets/treserved">
<?
$now=getConvTime("now");
echo "<select class='wybor' name='show'>";
		echo "<option value='0'>Wybierz seans</option>";
		for($i=0; $i<=sizeof($this->index)-1; $i++){
		$time=getConvTime($this->index[$i]['tstart']);
			if($time['y'] == $now['y'] && $time['m'] == $now['m'] && $time['d'] == $now['d']){
				echo "<option value='".$this->index[$i]['id']."' >".$this->index[$i]['title']." ".$time['h'].":".$time['i']."</option>";
			}
		}
	echo "</select>";
	echo "</br></br><label>Login: </label><input type='text' name='login'><br/>";
	echo "</br></br><button type='submit' class='next'>Szukaj</button>";
?>
</form>
<br/>
<br/>

<a href='<?php echo URL;?>tickets/ticketAv'><h4>Ustaw dostępne**</h4></a>
<h2>**Zwolnienie zarezrewowanych biletów na seanse, do których pozostało mniej niż 10 minut.</h2>
