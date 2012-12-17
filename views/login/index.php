<!--<tabel id='login'>
<tr><td><img src="<?php echo URL;?>public/Images/ikona_logowanie.png" alt='logowanie'></td>
<form action="<?php echo URL;?>login/check" method="post">
	<label>Login: </label><input type="text" name="login" required="required"/><br/>
	<label>Hasło: </label><input type="password" name="password" required="required"/><br/>
	<label></label><input type="submit" class="" value="Zaloguj"/>
</form>
</td>
</tr>
</tabel>
-->
<table class='center'>
<tr><td><img id="logowanie" src="<?php echo URL;?>public/Images/ikona_logowanie.png" alt='logowanie'></td>
<td><form class="form-1" action="<?php echo URL;?>login/check" method="post">
	<p class="field">
		<input type="text" name="login" required="required" placeholder="Login"/>
	  	<i class="icon-user icon-large"></i>
	</p>
	<p class="field">
		<input type="password" name="password" required="required" placeholder="Hasło"/>
		 <i class="icon-lock icon-large"></i>
	</p>
	<p class="submit">
		<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
	</p>
</form></td></tr>
</table>
