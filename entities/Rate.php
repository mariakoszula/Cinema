<?php


/**
 * Rate
 *
 * @Table(name="rate")
 * @Entity
 */
class Rate
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="rate_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer $rate
     *
     * @Column(name="rate", type="smallint", nullable=true)
     */
    private $rate;

    /**
     * @var Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     * @JoinColumn(name="users_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var Movie
     *
     * @ManyToOne(targetEntity="Movie")
     * @JoinColumns({
     * @JoinColumn(name="movie_id", referencedColumnName="id")
     * })
     */
    private $movie;

	public function __construct($rate, Users $user, Movie $movie){
		$this->rate = $rate;
		$this->user = $user;
		$this->movie = $movie;
	}
	public function getId(){
		return $this->id;
	}
	
	public function getRate(){
		return $this->rate;
	}
	
	public function getUser(){
		return $this->user;
	}
	
	public function getMovie(){
		return $this->movie;
	}

}