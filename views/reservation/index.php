<?php
echo "Proszę wybrać miejsca";
		print_r($_SESSION);
?>		
<div id="seats">
<form action="<?php echo URL?>reservation/discountChoice"  method="post" name="seats">
<p><strong>Ekran</strong></p>

<hr>
<table class="center">
<?php
	for($r=1; $r<=20; $r++){
			echo "<tr><td>$r</td>";
		for($s=1; $s<=20; $s++){
			echo "<td>";
		for($i=0; $i<sizeof($this->seatChoice); $i++){
			if($s == $this->seatChoice[$i]['seat_no'] && $r == $this->seatChoice[$i]['row_no']){
				echo "<button type='button'  value='".$r."S".$s."' id='".$this->seatChoice[$i]['id']."' ";
				$seat_state = $this->seatChoice[$i]['type']=='available' ?  'class="available" onclick="doSeat(id, value)"' : 'class="occupied" disabled';
				echo $seat_state."></button>";
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

<?php
/*
for($i=0; $i<sizeof($this->seatChoice); $i++){
	
	if(($this->seatsChoice[$i]['row_no'])==($this->seatChoice[$i+1]['row_no']+1) ){
		echo "<tr>";
	}
echo "<td>";
		echo "<button type='button' class='seat' id='".$this->seatChoice[$i]['row_no']."S".$this->seatChoice[$i]['seat_no'];
		$seat_state = $this->seatChoice[$i]['type']=='available' ?  '' : 'disabled';
		echo $seat_state."'>R:".$this->seatChoice[$i]['row_no']."<br/> M:".$this->seatChoice[$i]['seat_no']."</button></td>";

	if($this->seatChoice[$i]['row_no']!=$this->seatChoice[$i+1]['row_no'] ){
		echo "</tr>";
	}
}*/
?>