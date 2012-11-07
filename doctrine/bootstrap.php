<?php
// bootstrap.php

require_once "entities/Users.php";
require_once "entities/Room.php";
require_once "entities/Seat.php";
require_once "entities/Movie.php";

if (!class_exists("Doctrine\Common\Version", false)) {
    require_once "bootstrap_doctrine.php";
}

?>
