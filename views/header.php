<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cinema</title>
<link rel="Shortcut icon" href="<?php echo URL; ?>public/Images/cin_przesk.png" />
<link rel="stylesheet" href="<?php echo URL;?>public/Style/default.css" type="text/css"/>
<script type="text/javascript" src="<?php echo URL;?>public/Scripts/jquery.js"></script>
<!--<script src="public/Scripts/jquery-1.4.2.min.js" type="text/javascript"></script>-->
<?php 
$url = $_GET['page_url'];
$tmp = explode("/", $url);
$file = "views/".$tmp[0]."/default.js";

if (file_exists($file)){
echo "<script type='text/javascript' src='".URL.$file."'></script>";
}
?>
</head>

<body>

<?php 
require "public/timeConv.php";
//date_default_timezone_set('Europe/Warsaw');
session_start();?>
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
<div id="main_con">

		
					<?php
					switch($_SESSION['role']){
				case "manager": 
					echo "<div id='top_menu'><ul><li ";
						if($tmp[0] == 'index') echo "class='current_page'";
					echo "><a href='".URL."index'>Strona Główna</a></li>";
					echo "<li ";
						if($tmp[0] == 'choosingShow') echo "class='current_page'";
					echo"><a href='".URL."choosingShow' >Wybierz seans</a></li>";
					echo "<li ";
						if($tmp[0] == 'moviesRank') echo "class='current_page'";
					echo "><a href='".URL."moviesRank'>Ranking filmów</a></li>";
					echo "<li ";
						if($tmp[0] == 'usersAction') echo "class='current_page'";
					echo "><a href='".URL."usersAction/index'>Moje konto</a></li></ul></div>";
					
					echo "<div id='left_menu'><ul><li><p>PANEL ADMINISTRACYJNY</p></li>";
					
					echo "<li ";
						if($tmp[0] == 'manager' && $tmp[1] == 'listOfUsers') echo "class='current_page'";
					echo "><a href='".URL."manager/listOfUsers'>Baza użytkowników</a></li>";
					echo "<li ";
						if($tmp[0] == 'manager' && $tmp[1] =='') echo "class='current_page'";
					echo "><a href='".URL."manager'>Dodawanie użytkowników</a></li>";
					echo "<li ";
						if($tmp[0] == 'rooms') echo "class='current_page'";
					echo "><a href='".URL."rooms'>Sale</a></li>";
					echo "<li ";
						if($tmp[0] == 'manageShows') echo "class='current_page'";
					echo "><a href='".URL."manageShows'>Zarządzenie repertuarem</a></li>";
					echo "<li ";
						if($tmp[0] == 'tickets') echo "class='current_page'";
					echo "><a href='".URL."tickets'>Bilety</a></li>";
					echo "</ul></div>";
					break;
				case "worker":
					echo "<div id='top_menu'><ul><li ";
						if($tmp[0] == 'index') echo "class='current_page'";
					echo "><a href='".URL."index'>Strona Główna</a></li>";
					echo "<li ";
						if($tmp[0] == 'choosingShow') echo "class='current_page'";
					echo"><a href='".URL."choosingShow' >Wybierz seans</a></li>";
					echo "<li ";
						if($tmp[0] == 'moviesRank') echo "class='current_page'";
					echo "><a href='".URL."moviesRank'>Ranking filmów</a></li>";
					echo "<li ";
						if($tmp[0] == 'usersAction') echo "class='current_page'";
					echo "><a href='".URL."usersAction/index'>Moje konto</a></li></ul></div>";
				 	
				 	echo "<div id='left_menu'><ul><li><p>PANEL ADMINISTRACYJNY</p></li>";
					echo "<li ";
						if($tmp[0] == 'manageShows') echo "class='current_page'";
					echo "><a href='".URL."manageShows'>Zarządzenie repertuarem</a></li>";
					echo "<li ";
						if($tmp[0] == 'tickets') echo "class='current_page'";
					echo "><a href='".URL."tickets'>Bilety</a></li>";
				 	echo "</ul></div>";
					break;
				case "client":
					echo "<div id='top_menu'><ul><li ";
						if($tmp[0] == 'index') echo "class='current_page'";
					echo "><a href='".URL."index'>Strona Główna</a></li>";
					echo "<li ";
						if($tmp[0] == 'choosingShow') echo "class='current_page'";
					echo"><a href='".URL."choosingShow' >Wybierz seans</a></li>";
					echo "<li ";
						if($tmp[0] == 'moviesRank') echo "class='current_page'";
					echo "><a href='".URL."moviesRank'>Ranking filmów</a></li>";
					echo "<li ";
						if($tmp[0] == 'usersAction') echo "class='current_page'";
					echo "><a href='".URL."usersAction/index'>Moje konto</a></li></ul></div>";
					break;
				default:
					echo "<div id='top_menu'><ul><li ";
						if($tmp[0] == 'index') echo "class='current_page'";
						echo "><a href='".URL."index'>Strona Główna</a></li>";
					echo "<li ";
						if($tmp[0] == 'choosingShow') echo "class='current_page'";
					echo"><a href='".URL."choosingShow' >Wybierz seans</a></li>";
					echo "</div>";
					break;
				}
				?>



<div id="content">
