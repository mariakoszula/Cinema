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
		$dql = "SELECT s from Show s";
		$res = $em->createQuery($dql)->getResult();
		$show = array ();
		//print_r($res);
		/*foreach ($results as $result) {
			$data[] = array (
				'id' => $result->getId(),
				'name' => $result->getName()
			);
		}*/
		
		
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
	
	public function save_show($data){
		require_once "doctrine/bootstrap.php";
		$movie = $em -> find('Movie', $data['movie']);
		$runtime = $movie->getRuntime();
		date_default_timezone_set('Europe/Berlin');
		$interval = DateInterval::createFromDateString($runtime.' minutes');
		$edate = new DateTime($data['start_time']);
		$edate->add($interval);
		$end_time = $edate->format('Y-m-d H:i:s');
		$sdate = new DateTime($data['start_time']);
		$start_time = $sdate->format('Y-m-d H:i:s');


		$show = new Show($data['room'], $data['movie'], $start_time, $end_time, $data['bprice']);
		$em-> persist($show);
		$em->flush();
		echo $num;
		$msg =  "Utworzono użytkownika: " . $show->getId();
		echo $msg;
	}
	
	
	function add_movie($data) {
		require_once "doctrine/bootstrap.php";
		$movie = new Movie($data['title'], $data['desc'], false, $data['time']);
		$em->persist($movie);
		$em->flush();
	}

	

}
?>
