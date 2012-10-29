<?php

/** @Entity
* @Table(name="seat")
**/
class Seat{
	/** @Id @Column(type="integer") @GeneratedValue */
	private $id;
	
	/** @Column(name="row_no", type="smallint", unique=true)**/
	private $row_no;
	
	/** @Column(name="seat_no", type="smallint")**/
	private  $seat_no;
	
	/** @ManyToOne (targetEntity="Room", inversedBy="id")**/
	protected $room;
	
	/** @Column(name="type", type="boolean")**/
	private $type;
	
	public function __construct($row_no, $seat_no, $room, $type){
		$this->row_no = $row_no;
		$this->seat_no = $seat_no;
		$this->room = $room;
		$this->type = $type;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getRowNo(){
		return $this->row_no;
	}
	
	public function getSeatNo(){
		return $this->seat_no;
	}
	
	public function getRoom(){
		return $this->room;
	}
	
	public function getTyp(){
		return $this->type;
	}
}
?>
