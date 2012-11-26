<?php
class MoviesRankModel{
	
	public function __construct(){
	}
	
	public function index(){
		require_once "bootstrap.php";
		$dql = 'SELECT m.id, m.title, coalesce(m.rating, 0) AS rating, count(r.id) AS votes FROM Movie m LEFT JOIN Rate r WITH m.id = r.movie group BY m.id, m.title, ' .
				'rating order by rating DESC';
		$query = $em -> createQuery($dql);
		$results = $query->getResult();
		return $results;
	}
	
	public function movie($id){
		require_once "bootstrap.php";
		$movie = $em->find('Movie', $id);
		$mid = $movie->getId();
		$title = $movie->getTitle();
		$time = $movie->getRuntime();
		$desc = $movie->getDesc();

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
				'rated' => $single
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
