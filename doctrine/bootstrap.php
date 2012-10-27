<?php
// bootstrap.php

require_once "entities/Users.php";

if (!class_exists("Doctrine\Common\Version", false)) {
    require_once "bootstrap_doctrine.php";
}

?>
