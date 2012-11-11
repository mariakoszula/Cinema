<?php

/** @Entity
	* @Table(name="showing")
	**/
class Show {
	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;

	
	/** @Column(name="room_id", type="integer")
	 * */
	protected $room;

	/**  @Column(name="movie_id", type="integer") */
	protected $movie;

	/** @Column(name="start_time", type="string")*/
	private $tstart;

	/** @Column(name="end_time", type="string")*/
	private $tend;

	/** @Column(name="basic_price", type="float")*/
	private $bprice;


	public function __construct($room, $movie, $tstart, $tend, $bprice){
		$this->room = $room;
		$this->movie = $movie;
		$this->tstart = $tstart;
		$this->tend = $tend;
		$this->bprice = $bprice;
		
	}
	
	public function getId() {
		return $this->id;
	}
	public function getRoom() {
		return $this->room;
	}

	public function getMovie() {
		return $this->movie;
	}
	
	public function getTstart() {
		return $this->tstart;
	}

	public function getTend() {
		return $this->tend;
	}
	
	public function getBprice() {
		return $this->bprice;
	}
}
?>
