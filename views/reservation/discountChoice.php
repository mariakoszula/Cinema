<?php

$bprice =  $_SESSION['show']['bprice'];

?>	

<table class='top'>
<tr><td><h1>2 KROK</h1><td><h2>Proszę wybrać zniżki.</h2></td><td>&nbsp</td></tr>
<tr>&nbsp</tr>
</table>

<form name="reservation" action="<?php echo URL; ?>reservation/save"  method="post">
<table class="center_two_colors">
<tr>&nbsp</tr>
<tr><th>Rząd</th><th>Miejsce</th><th>Zniżka</th></tr>
<?php

for($t=0; $t<sizeof($_SESSION['ticket']); $t++){
echo "<tr><td class='t1'>".$_SESSION['ticket'][$t]['row_no'];
echo "</td><td class='t1'>".$_SESSION['ticket'][$t]['seat_no'];

echo "</td><td class='t1'><div class='select_style'><select name='discount##".$_SESSION['ticket'][$t]['id']."'>";
	for($i=0; $i<sizeof($this->discountChoice); $i++){
		$frac = $this->discountChoice[$i]['fraction'];
		$price = $frac*$bprice;
		echo "<option value='". $this->discountChoice[$i]['id']."' ";
		if($this->discountChoice[$i]['fraction'] == 1) " selected='selected' ";
		echo ">".$this->discountChoice[$i]['type'].": ".$price." zł</option>";
	}
echo "</select></div></td></tr>";
}
?>
<tr><td>&nbsp</td></tr>
</table>
<br/>
<table class='center'>
<tr><td><h4><input type="radio" name="type" value="sold"/><label for="1">Kup</label></h4></t></td>
<td><h4><input type="radio" name="type" value="reserved"/><label for="2">Zarezerwuj</label></h4></t></td>
<?php
if($_SESSION['role'] == 'worker' || $_SESSION['role'] == 'manager'){
echo "<td><h4><input type='radio' name='type' value='unavailable'/><label for='3'>Zepsute</label></h4><td>";
}
echo "</tr>";
?>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp</td><td>&nbsp</td><td><button type="submit" onclick="return check()" class="next">Zatwierdź</button></td></tr>
</table>
</form>
<!--
<button class="next"><a href="#" onclick="history.go(-1);return false;">Powrót</button></td><td>
-->

