<?php
//@TODO zrobic selecta z sal 
//print_r($this->shows);
//$json = json_encode($this->shows);
//echo $this->shows['movie'];
?>
<h1>Dodaj seans</h1>
<div id="form">
<form id="show_form1" method="POST" action="<? echo URL;?>showing/save_show" onsubmit="return checkDate();">
	
	<label>Dzień: </label><input type="date" name="date" required="required"><br/>
	<label>Godzina(np. 12:00): </label><input type="text" name="hour"><br/>
	<label>Sala: </label><select name="sala" required="required">
	<?php for($i=0; $i<sizeof($this->shows)-1; $i++){?>
	<option value="<?php echo $this->shows[$i]['id'];?>">
	<?php echo $this->shows[$i]['name'];?></option><?php }?></select><br/>
	<label>Cena podstawowa: </label><input type="text" name="bprice" required="required"><br/>
	<input type="hidden" name="movie" value="<?php echo $this->shows['movie'];?>">
	
	<input type="submit" value="Dalej"/>
</form>	

<h1>Seanse</h1>

<?php 
