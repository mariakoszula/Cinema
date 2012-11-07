<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cinema</title>
<script type="text/javascript" src="<?php echo URL;?>public/Scripts/custom.js"></script>
<script type="text/javascript" src="<?php echo URL;?>public/Scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo URL;?>/views/rooms/js/default.js"></script>

</head>

<body>
<?php session_start();?>
<div id="header">

	<a href="<?php echo URL;?>index">Dzisiejsze seanse</a>
	<?php if($_SESSION['loggedIn']==false):?>
	<a href="<?php echo URL;?>register">Zarejstruj się</a>
	<?php endif;?>
	<?php
			switch($_SESSION['role']){
				case "manager": 
					echo "<a href='".URL."manager/listOfUsers'>Baza użytkowników</a>";
					echo "<a href='".URL."manager'>Dodawanie użytkowników</a>";
					echo "<a href='".URL."rooms'>Sale</a>";
					echo "<a href='".URL."movies'>Filmy</a>";
					echo "<a href='".URL."shows'>Seanse</a>";
					break;
				case "worker":
				 	echo "<a href='".URL."'>Baza klientów</a>";
				 	echo "<a href='".URL."movies'>Filmy</a>";
					echo "<a href='".URL."shows'>Seanse</a>";
					break;
				case "client":
				 	echo "<a href='".URL."'>Moje konto</a>";
					echo "<a href='".URL."'>Ranking filmów</a>";
					break;
			}
	if($_SESSION['loggedIn']==true){
		echo "<a href='".URL."manager/logout'>Wyloguj</a>";
	}else
		echo "<a href='".URL."login'>Zaloguj się</a>";?>
	
</div>

<div id="content">


