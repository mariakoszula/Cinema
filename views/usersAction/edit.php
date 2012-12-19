
<form id="register-form" method="post" onclick="return checkPass()" action="<?php echo URL;?>usersAction/save/<?echo$this->edit['id'];?>">
	<fieldset>
	<ul>
	<li>
	<label>Imię: </label><input type="text" name="name" value="<?php echo $this->edit['name']?>"/><br/>
	</li>
	<li>
	<label>Nazwisko: </label><input type="text" name="last_name" value="<?php echo $this->edit['last_name']?>"/><br/>
	</li>
	<li>
	<label>Nr telefonu: </label><input type="text" name="phone" value="<?php echo $this->edit['phone']?>"/><br/>
	</li>
	<li>
	<label>E-mail: </label><input type="email" name="email" value="<?php echo $this->edit['email']?>"/><br/>
	</li>
	<li>
	<label>Login: </label><input type="text" name="login" value="<?php echo $this->edit['login']?>"/><br/>
	</li>
	<li>
	<label>Hasło: </label><input type="password" name="password" /><br/>
	</li>
	<li>
	<p class="left">
	<button type="submit" name="submit"><i class="icon-check icon-large"></i> Edytuj</button>&nbsp<button type="reset" name="clear"><i class="icon-pencil icon-large"></i> Cofnij</button><br/>
	</li>
	</p>
	<ul>
	</fildset>	
</form>