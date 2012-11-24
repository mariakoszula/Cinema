<?php
	require "public/timeConv.php";
?>
<?php

echo "<select class='wybor'>";
		echo "<option value='0'>Wybierz date</option>";
		for($i=0; $i<=sizeof($this->index)-1; $i++){
			echo "<option value='".$this->index[$i]['tstart']."' >".$this->index[$i]['tstart']."</option>";
		}
	echo "</select><br/>";
	echo "<div class='movie'></div>";
?>
