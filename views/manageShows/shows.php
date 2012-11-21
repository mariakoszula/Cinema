<?php
//@TODO zrobic selecta z sal 
//print_r($this->shows);
//$json = json_encode($this->shows);
//echo $this->shows['movie'];
?>
<h1>Dodaj seans</h1>
<form id="show_form1" action="<? echo URL;?>manageShows/save_show" onsubmit="return checkDate()" method="post">

	<label>Dzień: </label><input type="date" name="start_date" required="required"><br/>
	<label>Godzina(np. 12:00): </label><input type="text" name="hour" required="required"><br/>
	<label>Sala: </label><select name="sala" required="required">
	<?php for($i=0; $i<sizeof($this->shows)-1; $i++){?>
	<option value="<?php echo $this->shows[$i]['id'];?>">
	<?php echo $this->shows[$i]['name'];?></option><?php }?></select><br/>
	<label>Cena podstawowa: </label><input type="text" name="bprice" required="required"><br/>
	<input type="hidden" name="movie" value="<?php echo $this->shows['movie'];?>">
	
	<input type="submit" value="Dodaj seans"/>
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