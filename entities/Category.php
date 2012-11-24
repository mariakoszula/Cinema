<?php

/**
 * Category
 *
 * @Table(name="category")
 * @Entity
 */
class Category
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="category_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	
		

}
