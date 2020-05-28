<?php

class User{

	public $id;
	public $userName;
	public $firstName;
	public $lastName;
	public $password;

	public function __construct(){

		//$this->instantiation();

	} // end construct


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

	public static function instantiation($record){

		$theObject = new self;

		foreach($record as $theAttribute => $value){

			if($theObject->hasTheAttribute($theAttribute)){
				$theObject->theAttribute = $value;
			} // end if

		} // end foreach

		

        return $theObject;

	} // end instantiation

} // end user class
?>