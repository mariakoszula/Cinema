
<form id="users_form" method="post" action="<?php echo URL;?>manager/save/<?echo$this->edit['id'];?>">
	<label>Imię: </label><input type="text" name="name" value="<?php echo $this->edit['name']?>"/><br/>
	<label>Nazwisko: </label><input type="text" name="last_name" value="<?php echo $this->edit['last_name']?>"/><br/>
	<label>Nr telefonu: </label><input type="text" name="phone" value="<?php echo $this->edit['phone']?>"/><br/>
	<label>E-mail: </label><input type="text" name="email" value="<?php echo $this->edit['email']?>"/><br/>
	<label>Login: </label><input type="text" name="login" value="<?php echo $this->edit['login']?>"/><br/>
	<label>Hasło: </label><input type="password" name="password"/><br/>
	<select name="role">
			<option value="client" <?php if($this->edit['role']=='client') echo "SELECTED";?>>Klient</option>
			<option value="worker" <?php if($this->edit['role']=='worker') echo "SELECTED";?>>Pracownik</option>
			<option value="manager"<?php if($this->edit['role']=='manager') echo "SELECTED";?>>Manager</option>
	</select><br/>
	<input type="submit" value="Edytuj" name="edit"/><input type="reset" value="Wyczyść" name="clear"/>	<br/>
	
	
	
</form>
