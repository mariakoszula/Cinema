<?php
class UsersActionModel {
	function __construct() {

	}
	public function index($id){
		require_once ("bootstrap.php");
		$user = $em->find('Users', $id);
		$qb = $em->createQueryBuilder();
		$qb -> select('t.id')
			-> from('Ticket', 't')
			-> where('t.user = ?1')
			-> setParameter(1, $user);
		$query = $qb->getQuery();
		$results = $query->getArrayResult();
		for($i=0; $i<sizeof($results); $i++){
		$ticket[$i] = $em->find('Ticket', $results[$i]['id']);
		
		$ticket[$i] = array(
			'id' => $ticket[$i]->getId(),
			'row' => $ticket[$i]->getRow(),
			'room' => $ticket[$i]->getShow()->getRoom()->getName(),
			'seat' => $ticket[$i]->getSeat(),
	 		'state' => $ticket[$i]->getTypes(),
	 		'time' => $ticket[$i]->getShow()->getTStart(),
	 		'disc' => $ticket[$i]->getDisc()->getType(),
			'title' => $ticket[$i]->getShow()->getMovie()->getTitle(),
			'runtime' => $ticket[$i]->getShow()->getMovie()->getRuntime()
	); 
		}
		$em->clear();
		return $ticket;
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
		$em->clear;
		return ($data);
	}

	public function save($data) {
		require_once ("bootstrap.php");
		$user = $em -> find('Users', $data['id']);
		$user->setName($data['name']);
		$user->setLastName($data['last_name']);
		$user->setEmail($data['email']);
		$user->setPhone($data['phone']);
		$user->setLogin($data['login']);
		$user->setPassword($data['password']);

		$em->persist($user);
		$em->flush();
		$em->clear();
	}
	
	public function cancel($id){
		require_once ("bootstrap.php");
		if(isset($_SESSION['ticket'])) unset($_SESSION['ticket']);
		if(isset($_SESSION['show'])) unset($_SESSION['show']);


		$ticket = $em->find('Ticket', $id);
		$discount = $em->find('Discount', 1);
		$user = $em->find('Users', 0);
		$ticket->setDiscount($discount);
		$ticket->setTypes('available');
		$ticket->setUser($user);

		$em->persist($ticket);
		$em->flush();
		$em->clear();
		
	}
}
?>
