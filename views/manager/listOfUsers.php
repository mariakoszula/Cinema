<?php

echo "<table class='center'>";
foreach ($this->listOfUsers as $key => $value){
	if($value['id'] != 0){
		echo "<tr>";
		echo "<td>".$value['name']."</td>";
		echo "<td>".$value['lastname']."</td>";
		echo "<td>".$value['login']."</td>";
		echo "<td><a href='".URL."manager/edit/".$value['id']."'>Edycja</a> <a href='".URL."manager/delete/".$value['id']."'>Usuń</a></td>";
		echo "</tr>";
		}}
echo "</table>";
?>
