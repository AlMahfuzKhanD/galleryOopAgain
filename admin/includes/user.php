<?php

class User{

	public static function findAll(){

		return self::findThisQuery("SELECT * FROM users");

	} // findAll

	public static function findById($id){

		global $database;

		$resultSet = self::findThisQuery("SELECT * FROM users WHERE id = $id LIMIT 1");
		$foundUser = mysqli_fetch_array($resultSet);
		return $foundUser;

	} // findById

	public static function findThisQuery($sql){

		global $database;
		$resultSet = $database->query($sql);
		return $resultSet;


	} //end findThisQuery

} // end user class
?>