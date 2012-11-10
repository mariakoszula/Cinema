<?php

/** @Entity
	* @Table(name="showing")
	**/
class Show {
	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;

	
	/** @OneToMany(targetEntity="Room", mappedBy="id")
	 * */
	private $room;

	/** @ManyToOne(targetEntity="Movie")
	 *@JoinColumn(name="movie_id", referencedColumnName="id")*/
	private $movie;

	/** @Column(name="start_time", type="datetime")*/
	private $tstart;

	/** @Column(name="end_time", type="datetime")*/
	private $tend;

	/** @Column(name="basic_price", type="float4")*/
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
	
	public function getTsart() {
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
