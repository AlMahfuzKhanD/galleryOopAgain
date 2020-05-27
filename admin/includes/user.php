<?php

class User{

	public function findAll(){

		global $database;

		$resultSet = $database->query("SELECT * FROM users");
		retunr $resultSet;

	} // findAll

} // end user class
?>