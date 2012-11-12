<?php
class Test extends Controller{
       function __construct(){
echo 'adsfaf';
	$doctrine = new Doctrine();

	
       /*
	$doctrine = new Doctrine();
$user = new models\User;
$doctrine->em->persist($user);
$doctrine->em->flush();

       $user = new Users();
                $user->setName("Maria");
                $user->setLastName("Koszucka");
                $user->setRole("client");
                $user->setEmail("clddd@gmail.com");
                $user->setPhone("5655");
                $user->setLogin("cent");
                $user->setPassword("client");
				
$em -> persist($user);
$em->flush();*/
///echo "Created " . $user->getId(). "\n Imie ".$user->getName();
$dql = "SELECT a from Users a";
$results = $doctrine->em->createQuery($dql)->getResult();
print_r($results[1]);
//echo get_class($results[0]->getName());
/*
		$dql = "SELECT a from Users a";
		$results = $em->createQuery($dql)->getResult();
		print_r ($results);

$user = $em -> find("Users", 8);
print_r($user);*/
/*$dql = "SELECT COUNT(u.id) FROM Users u";
$results = $em->createQuery($dql)->getResult();
print_r($results);*/
	
       }
}
?>
