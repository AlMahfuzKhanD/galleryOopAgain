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

 		$result = mysqli_query($this->connection,$sql);
 		

 		return $result;

 	} // end query

 	private function confirmQuery($result){

 		if(!$result){
 			die("quewry failed");
 		}

 	} // end confirmQuery

 	public function escapeString($string){

 		$escapedString = mysqli_real_escape_string($this->connection,$string);

 		return $escapedString;

 	} // end eschape string



 } // end database class

 $database = new Database();

?>