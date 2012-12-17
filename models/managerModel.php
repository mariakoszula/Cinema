<?php
class ManagerModel {
	function __construct() {

	}

	function create($data) {
		require_once ("bootstrap.php");
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

		echo "Created " . $user->getId() . "\n Imie " . $user->getName();

	}

	public function listOfUsers() {
		require_once ("bootstrap.php");
		$dql = "SELECT a from Users a";
		$results = $em->createQuery($dql)->getResult();
		$data = array ();
		foreach ($results as $result) {
			$data[] = array (
				'id' => $result->getId(),
				'name' => $result->getName(),
				'lastname' => $result->getLastName(),
				'login' => $result->getLogin(),
				'role' => $result->getRole()
			);
		}
		return $data;
	}

	public function delete($id) {
		require_once ("bootstrap.php");
		$user = $em->find('Users', $id);
		$login = $user->getLogin();
		$em->remove($user);
		$em->flush();

		echo "Usunięto użytkownika o loginie: " . $login;

	}

	public function edit($id) {
		require_once ("bootstrap.php");
		$user = $em->find('Users', $id);
		$data = array ();
		$data['id'] = $user->getId();
		$data['name'] = $user->getName();
		$data['last_name'] = $user->getLastName();
		$data['phone'] = $user->getPhone();
		$data['email'] = $user->getEmail();
		$data['login'] = $user->getLogin();
		$data['role'] = $user->getRole();
		return ($data);
	}

	public function save($data) {
		require_once ("bootstrap.php");
		$user = $em -> find('Users', $data['id']);
		$user->setName($data['name']);
		$user->setLastName($data['last_name']);
		$user->setRole($data['role']);
		$user->setEmail($data['email']);
		$user->setPhone($data['phone']);
		$user->setLogin($data['login']);
		$user->setPassword($data['password']);

		$em->persist($user);
		$em->flush();
	/*$query = $em->createQuery('update Users u SET u.name= :name, u.last_name= :last_name, u.phone= :phone, ' .
		'u.email= :email, u.role= :role, u.login= :login, u.password= :password WHERE u.id= :id');
		$query->setParameters(array (
			'id' => $data['id'],
			'name' => $data['name'],
			'last_name' => $data['last_name'],
			'phone' => $data['phone'],
			'email' => $data['email'],
			'role' => $data['role'],
			'login' => $data['login'],
			'password' => md5($data['password'])
		));
		$numUpdated = $query->execute();
		$qb = $em->createQueryBuilder();
		$qb ->update('Users', 'u')
			->set('u.name', '?1')
			->set('u.last_name', '?2')
			->set('u.login', '?3')
			->where('u.id = ?4');
		$qb->setParameters(array(
				1 => $data['name'],
				2 => $data['last_name'],
				3 => $data['login'],
				4 => $data['id']));
		$query = $qb->getQuery();
		$query->execute();*/
		
	}

}
?>
