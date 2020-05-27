<?php

require_once("new_config.php");



 class Database{

 	public $connection;

 	function __construct(){
 		
 		$this->OpendDbConnection();


 	} // end construct

 	public function OpendDbConnection() {
 		
 		$this->connection = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);

 		if($this->connection->connect_errno){
 			die("Database connection failed" .  $this->connection->connect_error);
 		}
 	} // end OpenDbConnection

 	public function query($sql){

 		$result = $this->connection->query($sql);

 		$this->confirmQuery($result);
 		
 		return $result;

 	} // end query

 	private function confirmQuery($result){

 		if(!$result){
 			die("quewry failed". $this->connection->error);
 		}

 	} // end confirmQuery

 	public function escapeString($string){

 		$escapedString = $this->connection->real_escape_string($string);

 		return $escapedString;

 	} // end eschape string

 	public function theInserId(){
 		return $this->connection->insert_id;
 	}



 } // end database class

 $database = new Database();

?>