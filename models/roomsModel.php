<?php
class RoomsModel {
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
		$name = $room->getName();
		
		$dql = "SELECT s from Seat s WHERE s.room = ".$id;
		$results = $em->createQuery($dql)->getResult();
		foreach($results as $res){
			$data[] = array(
							'row_no' => $res->getRowNo(),
							'seat_no' => $res->getSeatNo(),
							'type' => $res->getTyp());
		}
		return $data;
	}
	
	

	public function save($data) {
		require_once "doctrine/bootstrap.php";
		
	}

}
?>
