<?php

class ChoosingShowModel{
	function __construct(){
	}
	
	public function index(){
 		require "bootstrap.php";
 		date_default_timezone_set('Europe/Berlin');
		$now = new DateTime("now");
		$now = $now->format('Y-m-d H:i:s');
		$qb = $em->createQueryBuilder();
		$qb	->select('s.tstart')
			->from('Showing', 's')
			->groupBy('s.tstart')
			->having($qb->expr()->gte('s.tstart', '?1'))
			->setParameter(1, $now)
			->orderby('s.tstart');
		$query = $qb->getQuery(); 	
		$array = $query->getArrayResult();
		$em -> clear();
		return $array;
		/*$dql = "SELECT s.tstart from Showing s WHERE s.tstart = '".$now."'";
		$show = $em -> createQuery($dql);
		$res = $show->getResult();
		print_r($res[0]);*/

	}
	
}
?>
