<form id="register-form" method="POST" onsubmit="return nameValid()" action="<?php echo URL;?>manager/create">
	<fieldset>
	 <ul>
	 	<li>
		<label>Imię: </label><input type="text" name="name" required="required"/><br/>
		</li>
		<li>
		<label>Nazwisko: </label><input type="text" name="last_name" required="required"/><br/>
		</li>
		<li>
		<label>Nr telefonu: </label><input type="text" name="phone" required="required"/><br/>
		</li>
		<li>
		<label>E-mail: </label><input type="email" name="email" required="required"/><br/>
		</li>
		<li>
		<label>Login: </label><input type="text" name="login" required="required"/><br/>
		</li>
		<li>
		<label>Hasło: </label><input type="password" name="password" required="required"/><br/>
		</li>
		<li>
		<label>Role</label>
			<select name="role">
				<option value="client">Klient</option>
				<option value="worker">Pracownik</option>
				<option value="manager">Manager</option>
			</select>
		</li><br/>
		<p class="left">
		<button type="submit" name="submit"><i class="icon-check icon-large"></i> Zarejestruj</button>&nbsp<button type="reset" name="clear"><i class="icon-pencil icon-large"></i> Wyczyść</button>
		</p>
		</ul>
	</fieldset>
</form>	