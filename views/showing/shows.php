<?php
//@TODO zrobic selecta z sal 
//print_r($this->shows);
//$json = json_encode($this->shows);

?>
<h1>Dodaj seans</h1>
<div id="form">
<form id="show_form1" method="POST" action="" onsubmit="return checkDate();">
	
	<label>Dzień: </label><input type="date" name="start_date" required="required"><br/>
	<input type="hidden" name="movie" value='<?php $this->shows['movie'];?>'>

	<input type="submit" value="Dalej"/>
</form>	
</div>

<?php 
