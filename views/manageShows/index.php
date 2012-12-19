
<div id="movie_list">
<form class="form-two" method="POST" action="<?php echo URL;?>manageShows/shows">
<h1>Filmy:</h1>
<hr>
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
<button type="submit" class='next'><i class="icon-plus-sign icon-large"></i> Dodaj seans</button>
</form>
</div>
<form class="form-two" method="POST" action="<?php echo URL;?>manageShows/add_movie">
	<fieldset>
	<h1>Dodaj film</h1>
	<label>Tytuł: </label><input type="text" name="title" required="required"/><br/><br/>
	<label>Opis: </label><textarea rows="10" cols="20" name="description"></textarea><br/><br/><br/><br/>
	</br><label>Czas trwania [min]: </label><input type="text" name="time" required="required"/><br/><br/>
	<label>Categoria:</label><select class="cat" name="category"></select>
	</br></br><button type="submit" class='next'><i class="icon-plus-sign icon-large"></i> Dodaj</button>
	</fieldset>
</form>	



