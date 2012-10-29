<form id="users_form" method="POST" action="<?php echo URL;?>manager/create">
	<label>Imię: </label><input type="text" name="name" required="required"/><br/>
	<label>Nazwisko: </label><input type="text" name="last_name" required="required"/><br/>
	<label>Nr telefonu: </label><input type="text" name="phone" required="required"/><br/>
	<label>E-mail: </label><input type="text" name="email" required="required"/><br/>
	<label>Login: </label><input type="text" name="login" required="required"/><br/>
	<label>Hasło: </label><input type="password" name="password" required="required"/><br/>
	<label>Role</label>
			<select name="role">
				<option value="client">Klient</option>
				<option value="worker">Pracownik</option>
				<option value="manager">Manager</option>
			</select><br/>
	<input type="submit" value="Zarejstruj" name="submit"/><input type="reset" value="Wyczyść" name="clear"/>	
</form>