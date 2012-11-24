<?php



/**
 * Discount
 *
 * @Table(name="discount")
 * @Entity
 */
class Discount
{
    /**
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="discount_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     *
     * @Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var float $fraction
     *
     * @Column(name="fraction", type="float", nullable=false)
     */
    private $fraction;
    
	public function __construct($type, $fraction){
		$this->type = $type;
		$this->fraction = $fraction;
	}
	
	public function getType(){
		return $this->type;
	}

	public function getFraction(){
		return $this->fraction;
	}

}