<?php

class TicketsModel{
	function __construct(){
	}
	
	public function index(){
 		require "bootstrap.php";
 		date_default_timezone_set('Europe/Warsaw');
		$now = new DateTime("now");
		$now = $now->format('Y-m-d H:i:s');
		$qb = $em->createQueryBuilder();
		$qb	->select('s.tstart', 's.id', 'm.title')
			->from('Showing', 's')
			->innerJoin('Movie', 'm', 'WITH', 's.movie = m.id')
			->where($qb->expr()->gte('s.tstart', '?1'))
			->setParameter(1, $now)
			->orderby('m.title');
		$query = $qb->getQuery(); 	
		$array = $query->getArrayResult();
		$em -> clear();
		return $array;
	}
	
	public function treserved($show, $login){
		require "bootstrap.php";
		$qb = $em->createQueryBuilder();
		$qb -> select('t.id')
			-> from('Ticket', 't')
			-> innerJoin('Users', 'u', 'WITH', 't.user = u.id')
			-> where('t.showing = ?1 AND u.login = ?2')
			-> setParameters(array('1' => $show, '2' => $login ));
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
			'runtime' => $ticket[$i]->getShow()->getMovie()->getRuntime(),
			'name' => $ticket[$i]->getUser()->getName(),
			'lastname' => $ticket[$i]->getUser()->getLastName(),
			'show' => $show,
			'login' => $login
	); 
		}
		$em->clear();
		return $ticket;
	}

	public function sold($id){
		require_once ("bootstrap.php");
		$ticket = $em->find('Ticket', $id);	
		$ticket->setTypes('available');
		$em->persist($ticket);
		$em->flush();
		
		$ticket->setTypes('sold');
		$em->persist($ticket);
		$em->flush();
		$em->clear();
	}
}
?>
