<?php
class ReservationModel {
	function __construct() {
		
	}
	public function seatChoice($id){
		require_once ("bootstrap.php");
		$qb = $em->createQueryBuilder();
		$qb	->select('t.id, t.type, t.row_no, t.seat_no, s.bprice')
			->from('Ticket', 't')
			->innerJoin('Showing', 's', 'WITH', 's.id = t.showing')
			->where('t.showing = ?1')
			->orderby('t.id')
			->setParameter(1, $id);
		$query = $qb->getQuery(); 	
		$ticket = $query->getArrayResult();
		$_SESSION['show'] = array('id' => $id, 'bprice' => $ticket[0]['bprice']) ;

		return $ticket;
	}
	
	public function discountChoice($ticket){
		require_once ("bootstrap.php");
		$_SESSION['ticket'] = $ticket;
		
		$qb = $em->createQueryBuilder();
		$qb->select('d.id, d.type, d.fraction')
			->from('Discount', 'd')
			->orderby('d.fraction', 'DESC');
		$query = $qb->getQuery(); 	
		$discount = $query->getArrayResult();
		return $discount;
	 }
	 
	 public function save(){
	 	print_r($_SESSION);
	 }
}
?>
