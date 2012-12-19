<?php
require "public/timeConv.php";
?>

<div id="msg"></div>
<form class="form-two" id='show-form1' action="<? echo URL;?>manageShows/save_show" onsubmit="return checkDate()" method="post">
<h1>Dodaj seans</h1>
	<label>Dzień: </label><input type="date" name="start_date" required="required"><br/>
	<label>Godzina(np. 12:00): </label><input type="text" name="hour" required="required"><br/>
	<label>Sala: </label><select name="sala" required="required">
	<?php for($i=0; $i<sizeof($this->shows)-1; $i++){?>
	<option value="<?php echo $this->shows[$i]['id'];?>">
	<?php echo $this->shows[$i]['name'];?></option><?php }?></select><br/>
	<label>Cena podstawowa: </label><input type="text" name="bprice" required="required"><br/>
	<input type="hidden" name="movie" value="<?php echo $this->shows['movie'];?>">
	
	</br></br><button type="submit" class='next'><i class="icon-plus-sign icon-large"></i> Dodaj</button>
</form>	



<?php
/*
 * <h1>Seanse</h1>
 * echo "<table>";
foreach ($this->shows as $key => $value){
		echo "<tr>";
		echo "<td>".$value['title']."</td>";
		echo "</tr>";
		}
echo "</table>";*/
?>