<?php
class ManageShowsModel {
	function __construct() {

	}
	
	
	public function listOfMovies() {
		require_once ("bootstrap.php");
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
		require_once ("bootstrap.php");
	/*	$show = $em -> find('Showing', 1);
		$start_time = $show->getTstart();
		print_r($start_time);*/
		$rqb = $em -> createQueryBuilder();
		$rqb -> select('r.id', 'r.name')
			-> from('Room', 'r')
			-> orderBy('r.name', 'ASC');
		$query = $rqb->getQuery();
		$num = $query->execute();
		$em->clear();
		$movie = array('movie' => $movie);
		$data = array_merge($movie, $num);
		return $data;
	}
	
	public function save_show($data){
		require_once ("bootstrap.php");
		$movie = $em -> find('Movie', $data['movie']);
		$runtime = $movie->getRuntime();
		date_default_timezone_set('Europe/Berlin');
		$interval = DateInterval::createFromDateString($runtime.' minutes');
		$edate = new DateTime($data['start_time']);
		$edate->add($interval);
		$end_time = $edate->format('Y-m-d H:i:s');
		$sdate = new DateTime($data['start_time']);
		$start_time = $sdate->format('Y-m-d H:i:s');

		$room = $em->find('Room', $data['room']);

		
		$show = new Showing($room, $movie, $start_time, $end_time, $data['bprice']);
		$em-> persist($show);
		$em->flush();
	}
	
	
	function add_movie($data) {
		require_once ("bootstrap.php");
		$movie = new Movie($data['title'], $data['desc'], false, $data['time']);
		$em->persist($movie);
		$em->flush();
		
	}

	

}
?>
