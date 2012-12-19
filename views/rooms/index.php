<?php
echo "<table class='center'>";
foreach ($this->listOfRooms as $key => $value){
		echo "<tr>";
		echo "<td>".$value['name']."</td>";
		echo "<td><a href='".URL."rooms/seats/".$value['id']."'>Rozkład siedzeń</a></td><td><a class='remove' href='".URL."rooms/delete/".$value['id']."'><i class='icon-remove icon-large'></i></a></td>";
		echo "</tr>";
		}
		echo "</table>";
?>
<hr>

<form class="form"  method="POST" action="<?php echo URL;?>rooms/add">
	<label>Nazwa sali: </label><input type="text" name="name" required="required"/>
	</br></br>
	<button type="submit" class='next'><i class="icon-plus-sign icon-large"></i> Dodaj</button>
</form>	
