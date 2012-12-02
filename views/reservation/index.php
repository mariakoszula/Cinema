<div>
<table class='top'>
<tr><td><h1>1 KROK</h1><td><h2>Proszę wybrać miejsca.</h2></td><td>&nbsp</td><td><button class='available' disabled></button></td><td><h3>Wolne</h3></td><td><button class='occupied' disabled></button></td><td><h3>Zajęte</h3></td><td><button class='choice' disabled></button></td><td><h3>Wybrane</h3></td></tr>
</table>
</div>	
<div id="seats">
<form action="<?php echo URL?>reservation/discountChoice"  method="post" name="seats">

<table class="center">
<tr><td colspan="21">&nbsp</td></tr>
<tr><td colspan="21"><strong>EKRAN</strong></td></tr>
<tr><td colspan="21"><hr></td></tr>
<?php
	for($r=1; $r<=20; $r++){
			echo "<tr><td>$r</td>";
		for($s=1; $s<=20; $s++){
			echo "<td>";
		for($i=0; $i<sizeof($this->seatChoice); $i++){
			if($s == $this->seatChoice[$i]['seat_no'] && $r == $this->seatChoice[$i]['row_no']){
				echo "<button type='button'  value='".$r."S".$s."' id='".$this->seatChoice[$i]['id']."' ";
				$seat_state = $this->seatChoice[$i]['type']=='available' ?  'class="available" onclick="doSeat(id)"' : 'class="occupied" disabled';
				echo $seat_state."><input type='hidden' id='Txx".$this->seatChoice[$i]['id']."'></button>";
			}
		}
		
			echo "</td>";
		}
			echo "</tr>";
	}


?>
<tr><td colspan="21">&nbsp</td></tr>
<tr><td colspan="21"><button class="next" type="submit">Dalej</button><td/></tr>
</table>
</form>
</div>
<p id="info"></p>
