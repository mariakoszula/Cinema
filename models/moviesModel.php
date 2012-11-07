<?php
class MoviesModel {
	function __construct() {

	}

	function add($name) {
		//@TODO złapanie error exception żeby wywaliło że sala o danej nazwie istnieje
		require_once "doctrine/bootstrap.php";
		$room = new Room();
		$room->setName($name);
		$nazwa = $room->getName();
		$em->persist($room);
		$em->flush();
	}

	public function listOfRooms() {
		require_once "doctrine/bootstrap.php";
		$dql = "SELECT r from Room r";
		$results = $em->createQuery($dql)->getResult();
		$data = array ();
		foreach ($results as $result) {
			$data[] = array (
				'id' => $result->getId(),
				'name' => $result->getName()
			);
		}
		return $data;
	}

	public function delete($id) {
		require_once "doctrine/bootstrap.php";
		$user = $em->find('Room', $id);
		$em->remove($user);
		$em->flush();
	}

	
	public function seats($id) {
		require_once "doctrine/bootstrap.php";
		$room = $em->find('Room', $id);
		$room_data = array('name' => $room->getName(),
					'id' => $room->getId());
				
		
		
		$dql = "SELECT s from Seat s WHERE s.room = ".$id." order by s.id";
		$results = $em->createQuery($dql)->getResult();
		foreach($results as $res){
			$seat[] = array(
							'row_no' => $res->getRowNo(),
							'seat_no' => $res->getSeatNo(),
							'type' => $res->getTyp());
		}
		$data = array_merge($room_data, $seat);
		return $data;
	}
	
	

	public function save($data) {
		require_once "doctrine/bootstrap.php";
		for($i=0; $i<sizeof($data)-1; $i++){
		$qb = $em -> createQueryBuilder();
		$qb -> update('Seat', 's')
			-> set('s.type', '?1')
			-> where('s.room = ?2 AND s.row_no = ?3 AND s.seat_no = ?4');
		$qb->setParameters(array(
				1 => $data[$i]['type'],
				2 => $data['id'],
				3 => $data[$i]['row_no'],
				4 => $data[$i]['seat_no']));
		$query = $qb->getQuery();
		$num = $query->execute();
		}
			echo sizeof($data);
		print_r($data);
		
	}

}
?>
