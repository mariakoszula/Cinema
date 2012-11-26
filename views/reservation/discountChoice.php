<?php

echo "Wybrane miejsca:<br/>";	
$bprice =  $_SESSION['show']['bprice'];
?>		
<div>
<form name="reservation" action="<?php echo URL; ?>reservation/save" onsubmit="return check()" method="post">
<table class="center" border="1">

<tr><th>Rząd</th><th>Miejsce</th><th>Zniżka</th></tr>
<?php

for($t=0; $t<sizeof($_SESSION['ticket']); $t++){
echo "<tr><td>".$_SESSION['ticket'][$t]['row_no'];
echo "</td><td>".$_SESSION['ticket'][$t]['seat_no'];

echo "</td><td><select name='discount##".$_SESSION['ticket'][$t]['id']."'>";
	for($i=0; $i<sizeof($this->discountChoice); $i++){
		$frac = $this->discountChoice[$i]['fraction'];
		$price = $frac*$bprice;
		echo "<option value='". $this->discountChoice[$i]['id']."' ";
		if($this->discountChoice[$i]['fraction'] == 1) " selected='selected' ";
		echo ">".$this->discountChoice[$i]['type'].": ".$price." zł</option>";
	}
echo "</select></td></tr>";
}
?>
</table>
<input type="radio" name="type" value="sold"/><label for="1">Kup</label></t>
<input type="radio" name="type" value="reserved"/><label for="2">Zarezerwuj</label></t>
<?php
if($_SESSION['role'] == 'worker' || $_SESSION['role'] == 'manager'){
echo "<input type='radio' name='type' value='unavailable'/><label for='3'>Zepsute</label>";
}
?>
<br/><input type="submit" value="Zatwierdź"/>
</form>

</div>

