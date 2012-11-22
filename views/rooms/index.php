<?php
echo "<table class='center'>";
foreach ($this->listOfRooms as $key => $value){
		echo "<tr>";
		echo "<td>".$value['name']."</td>";
		echo "<td><a href='".URL."rooms/seats/".$value['id']."'>Rozkład siedzeń</a> <a href='".URL."rooms/delete/".$value['id']."'>Usuń</a></td>";
		echo "</tr>";
		}
echo "</table>";
?>


<form id="room_form" method="POST" action="<?php echo URL;?>rooms/add">
	<label>Nazwa sali: </label><input type="text" name="name" required="required"/><br/>
	<input type="submit" value="Dodaj" name="submit"/>
</form>	

