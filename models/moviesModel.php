<?php
class MoviesModel {
	function __construct() {

	}

/*	function add($name) {
		//@TODO złapanie error exception żeby wywaliło że sala o danej nazwie istnieje
		require_once "doctrine/bootstrap.php";
		$room = new Room();
		$room->setName($name);
		$nazwa = $room->getName();
		$em->persist($room);
		$em->flush();
	}*/

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
