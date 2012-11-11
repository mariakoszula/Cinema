
<h1>Dodaj film</h1>
<form id="movies_form" method="POST" action="<?php echo URL;?>showing/add_movie">
	<label>Tytuł: </label><input type="text" name="title" required="required"/><br/>
	<label>Opis: </label><textarea rows="10" cols="20" type="text" name="description"></textarea><br/>
	<label>Czas trwania [min]: </label><input type="text" name="time" required="required"/><br/>
	<label>Categoria</label><br/>
	
	
	<input type="submit" value="Dodaj" name="submit"/>
</form>	

<h1>Filmy:</h1>
<form id="movies_form" method="POST" action="<?php echo URL;?>showing/shows">
<?php
echo "<table>";
foreach ($this->listOfMovies as $key => $value){
		echo "<tr>";
		echo "<td>".$value['title']."</td>";
		echo "<td><input type='radio' name='movie' value=".$value['id']." required='required'></td>";
		echo "</tr>";
		}
echo "</table>";
?>
<input type="submit" value="Dodaj seans na wybrany film"/>
</form>