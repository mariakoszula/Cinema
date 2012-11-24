<?php 
	$flag = $this->save;
	if($flag==1) header('location: '.URL.'usersAction/index');
	if($flag==0) echo "Zapraszam ponownie do wybrania miejsc";
?>