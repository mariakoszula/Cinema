<?php

        require_once "bootstrap.php";
               $user = new Users();
                $user->setName("Maria");
                $user->setLastName("Koszucka");
                $user->setRole("client");
                $user->setEmail("clddd@gmail.com");
                $user->setPhone("5655");
                $user->setLogin("cent");
                $user->setPassword("client");
				
$em -> persist($user);
$em->flush();

echo "Created " . $user->getId(). "\n Imie ".$user->getName();

?>
