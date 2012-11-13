<?php
//@TODO unique oraz datetime jak się uda

/** @Entity
	* @Table(name="showing")
	**/
class Showing {
	/** @Id @Column(type="integer")
	 * @GeneratedValue(strategy="SEQUENCE") 
	 * @SequenceGenerator(sequenceName="showing_id_seq", allocationSize=1, initialValue=1)
	 * */
	protected $id;

	
    /**
     *
     * @ManyToOne(targetEntity="Room")
     * @OJoinColumns({
     *   @JoinColumn(name="room_id", referencedColumnName="id")
     * })
     */
	private $room;
    /**
     *
     * @ManyToOne(targetEntity="Movie")
     * @JoinColumns({
     *  @JoinColumn(name="movie_id", referencedColumnName="id")
     * })
     */
	private $movie;

	/** @Column(name="start_time", type="string")*/
	private $tstart;

	/** @Column(name="end_time", type="string")*/
	private $tend;

	/** @Column(name="basic_price", type="float")*/
	private $bprice;


	public function __construct(Room $room, Movie $movie, $tstart, $tend, $bprice){
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
