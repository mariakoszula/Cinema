<?php

class DB extends PDO{
	private static $_dbconn;
	function __construct($DB_TYPE,$DB_HOST, $DB_USER, $DB_NAME, $DB_PASS){
				parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER,$DB_PASS);
	//		self::$_dbconn = pg_connect("host=".$DB_HOST." user=".$DB_USER." dbname=".$DB_NAME." password=".$DB_PASS) or die("Nie udalo sie polaczyc do bazy".pg_last_error());
	}
//	public function close_conn(){
//			 pg_close(self::$_dbconn);	
//	}
	
	
	
	
}
?>