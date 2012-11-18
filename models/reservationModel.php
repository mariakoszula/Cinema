<?php
class ReservationModel {
	function __construct() {
		
	}
	public function seatChoice($id){
		require_once ("bootstrap.php");
		session_start();
		$_SESSION['show']=$id;
		
		
		$qb = $em->createQueryBuilder();
		$qb	->select('t.id, t.type, t.row_no, t.seat_no')
			->from('Ticket', 't')
			->where('t.showing = ?1')
			->orderby('t.id')
			->setParameter(1, $id);
		$query = $qb->getQuery(); 	
		$ticket = $query->getArrayResult();

		return $ticket;
		/*$dql = "SELECT s from Seat s WHERE s.room = ".$id." order by s.id";
		$results = $em->createQuery($dql)->getResult();
		foreach($results as $res){
			$seat[] = array(
							'row_no' => $res->getRowNo(),
							'seat_no' => $res->getSeatNo(),
							'type' => $res->getTyp());
		}
		$data = array_merge($room_data, $seat);
		return $data;*/
	}

}
?>
