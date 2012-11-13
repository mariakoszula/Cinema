<?php

class IndexModel{
	function __construct(){
	}
	
	public function index(){
 		require "bootstrap.php";
 		
 		
 		date_default_timezone_set('Europe/Berlin');
		$now = new DateTime("now");
		$now = $now->format('Y-m-d H:i:s');
		
		$until = new DateTime();
		$interval = DateInterval::createFromDateString('5 hours');
		$until->add($interval);
		$until = $until->format('Y-m-d H:i:s');
			
		$qb = $em->createQueryBuilder();
		$qb	->select('s. id, s.tstart, m.title, m.desc, m.runtime')
			->from('Showing', 's')
			->innerJoin('Movie', 'm', 'WITH', 's.movie = m.id')
			->where($qb->expr()->between('s.tstart', '?1', '?2'))
			->orderby('m.title')
			->orderby('s.tstart')
			->setMaxResults(15)
			->setParameters(array(
				1 => $now,
				2 => $until));
		$query = $qb->getQuery(); 	
		$array = $query->getArrayResult();
		return $array;
		/*$dql = "SELECT s.tstart from Showing s WHERE s.tstart = '".$now."'";
		$show = $em -> createQuery($dql);
		$res = $show->getResult();
		print_r($res[0]);*/

	}
}
?>
