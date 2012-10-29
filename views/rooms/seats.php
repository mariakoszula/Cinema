


<form action="rooms/save" method="post">

<p id="seats" style="text-align: center;"></p>

<p style="text-align: center;"><strong>Ekran</strong></p>
<hr>
<table style="align: center">
<?php

for($i=0; $i<sizeof($this->seats); $i++){
	
	if(($this->seats[$i]['row_no'])==($this->seats[$i+1]['row_no']+1) ){
		echo "<tr>";
	}
echo "<td><button type='button' name='".$this->seats[$i]['row_no'].','.$this->seats[$i]['seat_no']."' onclick=''";
		if($this->seats[$i]['type']==false) echo "disabled='disabled'";
echo "><p id='".$this->seats[$i]['row_no'].','.$this->seats[$i]['seat_no']." ondbclick=''>R:".$this->seats[$i]['row_no']."<br/> M:".$this->seats[$i]['seat_no']."</p></button></td>";
	if($this->seats[$i]['row_no']!=$this->seats[$i+1]['row_no'] ){
		echo "</tr>";
	}
}
?>
</table>


<button type="submit">Zapisz</button>
</form>