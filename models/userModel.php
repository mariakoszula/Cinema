<?php
	
class UserModel{
	function __construct(){
			//parent::__construct();
	}
         
	function create($data){
	 require_once "doctrine/bootstrap.php";
		$user = new Users();
               $user->setName($data['name']);
               $user->setLastName($data['last_name']);
               $user->setRole($data['role']);
               $user->setEmail($data['email']);
               $user->setPhone($data['phone']);
               $user->setLogin($data['login']);
               $user->setPassword($data['password']);
				
$em->persist($user);
$em->flush();

echo "Created " . $user->getId(). "\n Imie ".$user->getName();
      
	}	    
               

	

}
?>
