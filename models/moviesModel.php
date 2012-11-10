<?php
class MoviesModel {
	function __construct() {

	}

	function add($data) {
		require_once "doctrine/bootstrap.php";
		$movie = new Movie($data['title'], $data['desc'], false, $data['time']);
		$em->persist($movie);
		$em->flush();
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

}
?>
