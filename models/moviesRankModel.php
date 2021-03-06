<?php
class MoviesRankModel{
	
	public function __construct(){
	}
	
	public function index(){
		require_once "bootstrap.php";
		$dql = 'SELECT m.id, m.is_on_screan, m.title, coalesce(m.rating, 0) AS rating, count(r.id) AS votes FROM Movie m LEFT JOIN Rate r WITH m.id = r.movie group BY m.id, m.title, m.is_on_screan, ' .
				'rating order by rating DESC';
		$query = $em -> createQuery($dql);
		$results = $query->getResult();
		
 		date_default_timezone_set('Europe/Warsaw');
		$now = new DateTime("now");
		$now = $now->format('Y-m-d H:i:s');
			
		$mdql = 'SELECT m.id, (SELECT count(s.id) from Showing s WHERE s.movie=m.id AND s.tstart >= ?1) AS times from Movie m';
		$mquery = $em->createQuery($mdql);
		$mquery->setParameter(1, $now);
		$array = $mquery -> getResult();
		for($i=0; $i<sizeof($array); $i++){
			$movie[$i] = $em->find('Movie', $array[$i]['id']);
			if($array[$i]['times'] == 0) $movie[$i]->setIsOnScrean('false');
			else $movie[$i]->setIsOnScrean('true');
			$em->persist($movie[$i]);
			$em->flush();
			$em->clear;
		}
		
		return $results;
	}
	
	public function movie($id){
		require_once "bootstrap.php";
		$movie = $em->find('Movie', $id);
		$mid = $movie->getId();
		$title = $movie->getTitle();
		$time = $movie->getRuntime();
		$desc = $movie->getDesc();
		$ison = $movie->getIsOnScrean();

		$user = $_SESSION['user'];
		
		$qb = $em->createQueryBuilder();
		$qb -> select('r.rate', $qb -> expr()-> count('r.id'))
			-> from('Rate', 'r')
			-> where('r.user = ?1 AND r.movie = ?2')
			-> groupBy('r.rate')
			-> setParameters(array( 1 => $user, 2 => $mid));
		$query = $qb->getQuery();
		$single = $query->getResult();
		$data = array(
				'title' => $title,
				'time' => $time,
				'mid' => $mid,
				'desc' => $desc,
				'rated' => $single,
				'ison' => $ison
		);
		$em->clear();
		return $data;
	}
	
	public function save_rate($data){
		require_once "bootstrap.php";
		$user = $em ->  find('Users', $data['user']);
		$movie = $em -> find('Movie', $data['movie']);
		$rate = new Rate($data['rate'], $user, $movie);
		$em->persist($rate);
		$em->flush();
		$em->clear();
		
	}
	

}
