<?php
class ReservationModel {
	function __construct() {
		
	}
	public function seatChoice($id){
		session_start();
		$_SESSION['show']=$id;
		
	}

}
?>
