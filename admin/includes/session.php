<?php

class Session {

	private $signedIn;
	public $userId;

	function __construct(){

		session_start();

	} // end of construct

	private function checkTheLogin(){

		if(isset($_SESSION['userId'])){

			$this->userId = $_SESSION['userId'];
			$this->signedIn = true;

		} else{

			unset($this->userId);
			$this->signedIn = false;

		} //end if else

	} // end checkTheLogin

} // end Session class

$session = new Session();

?>