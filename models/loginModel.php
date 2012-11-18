<?php
class LoginModel{
	
	public function __construct(){
	}
	public function check(){
		require_once ("bootstrap.php");
		$query = $em ->createQuery('SELECT COUNT(u.id) FROM Users u WHERE u.login = :login AND u.password = :password');
		$query->setParameters(array(
			'login' => $_POST['login'],
			'password' => md5($_POST['password'])
			));
		$result = $query->getSingleScalarResult();
		
		$query_role = $em -> createQuery('SELECT u.role, u.id FROM Users u WHERE u.login = :login AND u.password = :password');
		$query_role->setParameters(array(
			'login' => $_POST['login'],
			'password' => md5($_POST['password'])
			));
		$data = $query_role->getResult();
		$role = $data[0]['role'];
		$user = $data[0]['id'];	
		if($result == 1){
			session_start();
			$_SESSION['role']=$role;
			$_SESSION['loggedIn']=true;
			$_SESSION['user']=$user;
			header('location: ../index');
		}else{ 
			header('location: ../login');
		}
	}

}
