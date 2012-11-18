<h1><?php echo $this->seats['name']?></h1>
<form action="<?php echo URL?>rooms/save" method="post" name="seats">

<p id="seats" style="text-align: center;"></p>

<p style="text-align: center;"><strong>Ekran</strong></p>
<hr>
<table style="align: center">
<?php

for($i=0; $i<sizeof($this->seats)-2; $i++){

	if(($this->seats[$i]['row_no'])==($this->seats[$i+1]['row_no']+1) ){
		echo "<tr>";
	}
echo "<td>";
		if($this->seats[$i]['type']==false) echo "<button type='button' class='seats_disabled' id='".$this->seats[$i]['row_no']."S".$this->seats[$i]['seat_no']."' disabled>R:".$this->seats[$i]['row_no']."<br/> M:".$this->seats[$i]['seat_no']."</button></td>";
		elseif($this->seats[$i]['type']==true) echo "<button type='button' class='seats_is' id='".$this->seats[$i]['row_no']."S".$this->seats[$i]['seat_no']."' onclick='doSeatRoom(id)'>R:".$this->seats[$i]['row_no']."<br/> M:".$this->seats[$i]['seat_no']."<input type='hidden' id='R".$this->seats[$i]['row_no']."S".$this->seats[$i]['seat_no']."'/></button></td>";
	if($this->seats[$i]['row_no']!=$this->seats[$i+1]['row_no'] ){
		echo "</tr>";
	}
}
?>
</table>
<input type="hidden" name='id' value='<?php echo $this->seats['id']?>'/>
<button type="submit">Zapisz</button>
</form>
<p id="info"></p>