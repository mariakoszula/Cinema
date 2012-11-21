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
	 	require_once ("bootstrap.php");
	 	$flag = true;
	 //	$ticket = new Ticket();
	/* 		for($i=0; $i<sizeof($_SESSION['ticket']); $i++){
		$qb= $em ->createQueryBuilder();
		$qb -> update('Ticket', 't')
			-> set('t.type', '?1')
			-> set('t.discount', '?2')
			-> set('t.user', '?3')
			-> where('t.id = ?4');
		$qb->setParameters(array(
				1 => $_SESSION['ticket'][$i]['type'],
				2 => $_SESSION['ticket'][$i]['discount'],
				3 => $_SESSION['ticket'][$i]['user'],
				4 => $_SESSION['ticket'][$i]['id']));
		$query = $qb->getQuery();
		print_r($query);
	 		}*/
	 		
		//$result = $query->execute();
		//if($result==0) $flag = false;
	 	//	}	
	 	//if($flag == false){ 
	 		//echo "zajete miejsca";
	 		//$em -> remove();
		for($i=0; $i<sizeof($_SESSION['ticket']); $i++){ 
	
	 		
			$ticket[$i] = $em->find('Ticket', $_SESSION['ticket'][$i]['id']);
			$discount = $em->find('Discount', $_SESSION['ticket'][$i]['discount']);
			$user = $em->find('Users', $_SESSION['ticket'][$i]['user']);
			$ticket[$i]->setDiscount($discount);
			if($ticket[$i]->getTypes() != 'available') $flag = false;
			else $ticket[$i]->setTypes($_SESSION['ticket'][$i]['type']);
			$ticket[$i]->setUser($user);
		}
		if($flag == true){
		for($k=0; $k<sizeof($ticket); $k++){
		try{
			$em->getConnection()->beginTransaction();
			$em->persist($ticket[$k]);
			$em->flush();
			$em->getConnection()->commit();
		
		}catch (Execption $e){
			$em->getConnection()->rollback();
			$em->close();
			throw $e;
	 	}	
		}
	 	}else echo 'ktorys z biletow zajety, tu trzeba zrobic msg i przkierwoać jakos spowortem do strony z siedzeniami z odpowiednim showing id';
		$em->clear();
		unset($_SESSION['ticket']);
	 }
}
?>
