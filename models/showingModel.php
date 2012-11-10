<?php
class ShowingModel {
	function __construct() {

	}
	
	
	public function listOfMovies() {
			require_once "doctrine/bootstrap.php";
		$dql = "SELECT m from Movie m order by m.id";
		$results = $em->createQuery($dql)->getResult();
		$data = array ();
		foreach ($results as $result) {
			$data[] = array (
				'id' => $result->getId(),
				'title' => $result->getTitle(),
				'is_on_screan' => $result->getIsOnScrean(),
				
			);
		}
		return $data;
	}
	
	public function shows($movie) {
		require_once "doctrine/bootstrap.php";
		$qb = $em -> createQueryBuilder();
		$qb -> select('r.id', 'r.name')
			-> from('Room', 'r')
			-> orderBy('r.name', 'ASC');
		$query = $qb->getQuery();
		$num = $query->execute();
		$movie = array('movie' => $movie);
		$data = array_merge($movie, $num);
		return $data;
	}
	
	
	function add_movie($data) {
		require_once "doctrine/bootstrap.php";
		$movie = new Movie($data['title'], $data['desc'], false, $data['time']);
		$em->persist($movie);
		$em->flush();
	}

	

}
?>
