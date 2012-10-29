<?php
/** @Entity
* @Table(name="room")
**/

class Room{
	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;
	/** @Column(name="name", type="string", unique=true, length=20)**/
	private $name;
	
	public function getId(){
		return $this->id;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		$this->name = $name;
	}
}

?>
