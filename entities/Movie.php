<?php

/** @Entity
	* @Table(name="movie")
	**/
class Movie {
	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;

	/** @Column(name="title", type="string")*/
	private $title;

	/** @Column(name="description", type="string")*/
	private $desc;

	/** @Column(name="rating", type="float")*/
	private $rating;

	/** @Column(name="is_on_screan", type="boolean")*/
	private $is_on_screan;

	/** @Column(name="runtime", type="integer")*/
	private $runtime;

	/**
     * @var Category
     *
     * @ManyToOne(targetEntity="Category")
     * @JoinColumns({
     *   @JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

	public function __construct($title, $desc, $is_on_screan, $runtime, Category $category){
		$this->title = $title;
		$this->desc = $desc;
		$this->is_on_screan = $is_on_screan;
		$this->runtime = $runtime;
		$this->category = $category;
	}
	
	public function getId() {
		return $this->id;
	}
	public function getTitle() {
		return $this->title;
	}

	public function getDesc() {
		return $this->desc;
	}
	
	public function getIsOnScrean() {
		return $this->is_on_screan;
	}
	
	public function getRuntime() {
		return $this->runtime;
	}
	
	public function getRating() {
		return $this->rating;
	}
	public function getCategory(){
		return $this->category;
	}
	public function setIsOnScrean($is_on_screan) {
		$this->is_on_screan = $is_on_screan;
	}
}
?>
