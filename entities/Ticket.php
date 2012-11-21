<?php

/**
 * Ticket
 *
 * @Table(name="ticket")
 * @Entity
 */
class Ticket
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ticket_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer $row_no
     *
     * @Column(name="row_no", type="integer", nullable=false)
     */
    private $row_no;

    /**
     * @var integer $seat_no
     *
     * @Column(name="seat_no", type="integer", nullable=false)
     */
    private $seat_no;
    /**
     * @var string $type
     *
     * @Column(name="type", type="string", nullable=true, columnDefinition="ENUM('available', 'sold', 'reserved', 'unavailable')")
     */
    private $type;

    /**
     * @var Showing
     *
     * @ManyToOne(targetEntity="Showing")
     * @JoinColumns({
     *   @JoinColumn(name="showing_id", referencedColumnName="id")
     * })
     */
    private $showing;

    /**
     * @var Discount
     *
     * @ManyToOne(targetEntity="Discount")
     * @JoinColumns({
     *   @JoinColumn(name="discount_id", referencedColumnName="id")
     * })
     */
    private $discount;

    /**
     * @var Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     *   @JoinColumn(name="users_id", referencedColumnName="id")
     * })
     */
    private $user;

	public function getId() {
		return $this->id;
	}
	public function getRow() {
		return $this->row_no;
	}

	public function getSeat() {
		return $this->seat_no;
	}
	
	public function getTypes() {
		return $this->type;
	}

	public function getShow() {
		return $this->showing;
	}
	
	public function getDisc() {
		return $this->discount;
	}
	
	public function getUser() {
		return $this->user;
	}

	public function setDiscount(Discount $discount){
		$this->discount = $discount;
	}
	public function setTypes($type){
		$this->type = $type;
	}
	public function setUser(Users $user){
		$this->user = $user;
	}
}