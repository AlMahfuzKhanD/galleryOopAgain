<?php

class User{

	public static function findAll(){

		global $database;

		$resultSet = $database->query("SELECT * FROM users");
		return $resultSet;

	} // findAll

	public static function findById($id){

		global $database;

		$resultSet = $database->query("SELECT * FROM users WHERE id = $id LIMIT 1");
		$foundUser = mysqli_fetch_array($resultSet);
		return $foundUser;

	} // findById

} // end user class
?>