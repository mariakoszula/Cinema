<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cinema</title>
<link rel="stylesheet" href="<?php echo URL;?>public/Style/default.css" type="text/css"/>
<script type="text/javascript" src="<?php echo URL;?>public/Scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/rooms/js/default.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/manageShows/default.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/choosingShow/default.js"></script>
<script type="text/javascript" src="<?php echo URL;?>views/reservation/js/default.js"></script>
<script src="public/Scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
</head>

<body>
<?php session_start();?>
<div id="main">
<div id="header">
			<h1>Kino</h1>
				<ul>
				<?php if($_SESSION['loggedIn']==false):?>
					<li><a href="<?php echo URL;?>register">Rejstracja</a></li>
					<?php endif;?>
					<?php if($_SESSION['role']=='client' || $_SESSION['role']=='worker' ):?>
					<li><a href="<?php echo URL;?>usersAction/edit">Edytuj profil</a></li>
					<?php endif;?>
					<?php	if($_SESSION['loggedIn']==true){
					echo "<li><a href='".URL."manager/logout'>Wyloguj</a></li>";
					}else
					echo "<li><a href='".URL."login'>Zaloguj</a></li>";?>
					
				</ul>
</div>

				
		
					<?php
					switch($_SESSION['role']){
				case "manager": 
					echo "<div id='top_menu'><ul><li class='current_page'><a href='".URL."index'>Strona Główna</a></li>";
					echo "<li><a href='".URL."choosingShow'>Wybierz seans</a></li>";
					echo "<li><a href='".URL."moviesRank'>Ranking filmów</a></li>";
					echo "<li><a href='".URL."usersAction/index'>Moje konto</a></li><br/></ul></div>";
					echo "<div id='right_menu'><ul><li class='right_menu'><a href='".URL."manager/listOfUsers'>Baza użytkowników</a></li>";
					echo "<li><a href='".URL."manager'>Dodawanie użytkowników</a></li>";
					echo "<li><a href='".URL."rooms'>Sale</a></li>";
					echo "<li><a href='".URL."manageShows'>Zarządzenie repertuarem</a></li>";
					echo "<li><a href='".URL."tickets'>Baza biletów</a></li></ul></div>";
					break;
				case "worker":
					echo "<div id='top_menu'><ul><li class='current_page'><a href='".URL."index'>Strona Główna</a></li>";
					echo "<li><a href='".URL."choosingShow'>Wybierz seans</a></li>";
					echo "<li><a href='".URL."moviesRank'>Ranking filmów</a></li>";
				 	echo "<li><a href='".URL."usersAction/index'>Moje konto</a></li></ul></div>";
				 	echo "<div id='right_menu'><ul><li><a href='".URL."manageShows'>Zarządzenie repertuarem</a></li>";
				 	echo "<li><a href='".URL."'>Baza biletów</a></li></ul></div>";
					break;
				case "client":
					echo "<div id='top_menu'><ul><li class='current_page'><a href='".URL."index'>Strona Główna</a></li>";
					echo "<li><a href='".URL."choosingShow'>Wybierz seans</a></li>";
					echo "<li><a href='".URL."moviesRank'>Ranking filmów</a></li>";
					echo "<li><a href='".URL."usersAction/index'>Moje konto</a></li></ul></div>";
					break;
				default:
					echo "<div id='top_menu'><ul><li class='current_page'><a href='".URL."index'>Strona Główna</a></li></div>";
					break;
				}
				?>



<div id="content">

