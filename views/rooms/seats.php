<h1>Sala: <?php echo $this->seats['name']?></h1>
<form action="<?php echo URL?>rooms/save" method="post" name="seats">


<p style="text-align: center;"><strong>Ekran</strong></p>
<hr>
<table class="room-table">
<tr><th>&nbsp</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
<th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th><th>20</th></tr>
<?php
$r=1;
for($i=0; $i<sizeof($this->seats)-2; $i++){

			
	if(($this->seats[$i]['row_no'])==($this->seats[$i+1]['row_no']+1) ){
		echo "<tr>";
		echo "<td>adsfsa</td>";
	}
	echo "<td>";
		if($this->seats[$i]['type']==false) echo "<button type='button' class='seats_disabled' id='".$this->seats[$i]['row_no']."S".$this->seats[$i]['seat_no']."' disabled>R:".$this->seats[$i]['row_no']."<br/> M:".$this->seats[$i]['seat_no']."</button></td>";
		elseif($this->seats[$i]['type']==true) echo "<button type='button' class='seats_is' id='".$this->seats[$i]['row_no']."S".$this->seats[$i]['seat_no']."' onclick='doSeatRoom(id)'>R:".$this->seats[$i]['row_no']."<br/> M:".$this->seats[$i]['seat_no']."<input type='hidden' id='R".$this->seats[$i]['row_no']."S".$this->seats[$i]['seat_no']."'/></button></td>";
	if($this->seats[$i]['row_no']!=$this->seats[$i+1]['row_no'] ){
		echo "</tr>";
	}
	
	
}
?>

<input type="hidden" name='id' value='<?php echo $this->seats['id']?>'/>
<tr><td colspan="21"><button type="submit" class='next'><i class="icon-save"></i> Zapisz</button></td></tr>
</table>
</form>
<p id="info"></p>
