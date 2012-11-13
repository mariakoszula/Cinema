<?php

class IndexModel{
	function __construct(){
	}
	public function todaysShows(){
 		require "bootstrap.php";
 		
 		date_default_timezone_set('Europe/Berlin');
		$now = new DateTime("now");
		$now = $now->format('Y-m-d H:i:s');
		
		$until = new DateTime();
		$interval = DateInterval::createFromDateString('5 hours');
		$until->add($interval);
		$until = $until->format('Y-m-d H:i:s');
			
		echo $now;
		echo $until;
		$qb = $em->createQueryBuilder();
		$qb	->select('s.tstart')
			->from('Showing', 's')
			->where($qb->expr()->between('s.tstart', '?1', '?2'))
			->orderby('s.tstart')
			->setMaxResults(15)
			->setParameters(array(
				1 => $now,
				2 => $until));
		$query = $qb->getQuery(); 	
		$array = $query->getArrayResult();
		print_r($array);
		/*$dql = "SELECT s.tstart from Showing s WHERE s.tstart = '".$now."'";
		$show = $em -> createQuery($dql);
		$res = $show->getResult();
		print_r($res[0]);*/

	}
}
?>
