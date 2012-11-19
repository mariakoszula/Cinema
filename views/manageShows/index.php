
<div id="movie">
<h1>Filmy:</h1>
<form id="movies_form" method="POST" action="<?php echo URL;?>manageShows/shows">
<?php
echo "<table class='left'>";
foreach ($this->listOfMovies as $key => $value){
		echo "<tr>";
		echo "<td>".$value['title']."</td>";
		echo "<td><input type='radio' name='movie' value=".$value['id']." required='required'></td>";
		echo "</tr>";
		}
echo "</table>";
?>
<input id="add_show" type="submit" value="Dodaj seans na wybrany film"/>
</form>
</div>

<h1>Dodaj film</h1>
<table class='left'>
<form id="movies_form" method="POST" action="<?php echo URL;?>manageShows/add_movie">
	<tr><td><label>Tytuł: </label></td><td><input type="text" name="title" required="required"/></td></tr>
	<tr><td><label>Opis: </label></td><td><textarea rows="10" cols="20" type="text" name="description"></textarea></td></tr>
	<tr><td><label>Czas trwania [min]: </label></td><td><input type="text" name="time" required="required"/></td></tr>
	<tr><td><label>Categoria</label><select class="cat" name="category"></select></td></tr>
	<tr><td colspan="2"><input id="add_show" type="submit" value="Dodaj" name="submit"/></td></tr>
</form>	
</td>
</tr>
</table>

