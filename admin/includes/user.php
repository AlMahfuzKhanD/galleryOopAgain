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

		$resultArray = self::findThisQuery("SELECT * FROM users WHERE id = $id LIMIT 1");
		
		return !empty($resultArray) ? array_shift($resultArray) : false;
		

	} // findById

	public static function findThisQuery($sql){

		global $database;
		$resultSet = $database->query($sql);
		$theObjectArray = array();

		while($row = mysqli_fetch_array($resultSet)){

			$theObjectArray[] = self::instantiation($row);

		}
		return $theObjectArray;


	} //end findThisQuery

	public static function verifyUser($userName, $password){

		global $database;
		$userName = $database->escapeString($userName);
		$userName = $database->escapeString($password);

		$sql = "SELECT * FROM users WHERE ";
		$sql .= "userName = '{$userName}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";

		$resultArray = self::findThisQuery($sql);
		
		return !empty($resultArray) ? array_shift($resultArray) : false;

	} // end verify user

	public static function instantiation($record){

		$theObject = new self;

		foreach($record as $theAttribute => $value){

			if($theObject->hasTheAttribute($theAttribute)){
				$theObject->$theAttribute = $value; 
			} // end if

		} // end foreach

		

        return $theObject;

	} // end instantiation

	private function hasTheAttribute($theAttribute){

		$objectProperty = get_object_vars($this); // get_object_vars() return all the propery of the class

		return array_key_exists($theAttribute, $objectProperty);

	} //end hasTheAttribute

} // end user class
?>