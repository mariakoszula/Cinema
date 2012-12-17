<?php

class RegisterModel{
	function __construct() {
	}

	function create($data) {
		require_once ("bootstrap.php");
		$user = new Users();
		$user->setName($data['name']);
		$user->setLastName($data['last_name']);
		$user->setEmail($data['email']);
		$user->setPhone($data['phone']);
		$user->setLogin($data['login']);
		$user->setPassword($data['password']);
		$user->setRole('client');

		$em->persist($user);
		$em->flush();

//@Todo jak przekazać to do indeksu
		$msg =  "Utworzono użytkownika: " . $user->getLogin();
		echo $msg;
	}

}
?>
