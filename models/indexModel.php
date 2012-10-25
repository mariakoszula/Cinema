<?php

class IndexModel extends Model{
	function __construct(){
		parent::__construct();
		
	
	}
	public function test(){
		$sql = 'SELECT * from movie';
		$result = $this -> db -> prepare($sql);
		$result->execute();
		$sth = $result->fetchAll();
		print_r($sth);
	}
}
?>
