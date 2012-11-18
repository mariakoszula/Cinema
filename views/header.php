<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cinema</title>
<link rel="stylesheet" href="<?php echo URL;?>public/Style/default.css" type="text/css"/>
<script type="text/javascript" src="<?php echo URL;?>public/Scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo URL;?>/views/rooms/js/default.js"></script>
<script type="text/javascript" src="<?php echo URL;?>/views/showing/js/default.js"></script>
<script type="text/javascript" src="<?php echo URL;?>/views/reservation/js/default.js"></script>
<script src="public/Scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
</head>

<body>
<?php session_start();?>
<div id="header">
			<div class="row-1"><h1>Kino</h1>
				<ul>
				<?php if($_SESSION['loggedIn']==false):?>
					<li><a href="<?php echo URL;?>register">Rejstracja</a></li>
					<?php endif;?>
					<?php if($_SESSION['role']=='client'):?>
					<li><a href="<?php echo URL;?>login/edit">Edytuj profil</a></li>
					<?php endif;?>
					<?php	if($_SESSION['loggedIn']==true){
					echo "<li><a href='".URL."manager/logout'>Wyloguj</a></li>";
					}else
					echo "<li><a href='".URL."login'>Zaloguj</a></li>";?>
					
				</ul>
			</div>
			<div class="nav">
				<ul>
					<li class="current_page"><a href="<?php echo URL;?>index">Strona Główna</a></li>
		
					<?php
					switch($_SESSION['role']){
				case "manager": 
					echo "<li><a href='".URL."login/edit'>Wybierz seans</a></li>";
					echo "<li><a href='".URL."'>Ranking filmów</a></li>";
					echo "<li><a href='".URL."manager/listOfUsers'>Baza użytkowników</a></li>";
					echo "<li><a href='".URL."manager'>Dodawanie użytkowników</a></li>";
					echo "<li><a href='".URL."rooms'>Sale</a></li>";
					echo "<li><a href='".URL."manageShows'>Zarządzenie repertuarem</a></li>";
					break;
				case "worker":
					echo "<li><a href='".URL."login/edit'>Wybierz seans</a></li>";
				 	echo "<li><a href='".URL."manageShows'>Zarządzenie repertuarem</a></li>";
				 	echo "<li><a href='".URL."login/edit'>Edytuj profil</a></li>";
					break;
				case "client":
					echo "<li><a href='".URL."login/edit'>Wybierz seans</a></li>";
					echo "<li><a href='".URL."'>Ranking filmów</a></li>";
					echo "<li><a href='".URL."'>Moje konto</a></li>";
					break;
					}
				?>
			</ul>
		</div>
</div>

<div id="content">

