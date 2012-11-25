<?php
class MoviesRankModel{
	
	public function __construct(){
	}
	
	public function index(){
		require_once "bootstrap.php";
		$qb = $em->createQueryBuilder();
		$qb -> select('m.id, m.title, m.rating', $qb->expr()->count('r.id'))
			-> from('Movie', 'm')
			-> leftJoin('Rate', 'r', 'WITH', 'm.id = r.movie')
			-> groupBy('m.id')
			-> addGroupBy('m.title')
			-> addGroupBy('m.rating')
			-> orderBy ('m.rating');
		$query = $qb->getQuery();
		$results = $query->getResult();
		return $results;
	}

}
