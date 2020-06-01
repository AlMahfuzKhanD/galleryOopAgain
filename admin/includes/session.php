<?php

class Session {

	private $signedIn = false;
	public $userId;

	function __construct(){

		session_start();
		$this->checkTheLogin();

	} // end of construct

	public function isSignedIn(){ //getter method used to use private property outside class

		$this->signedIn;

	} // end isSignedIn

	public function login($user){

		if($user){

			$this->userId = $_SESSION['userId'] = $user->id;
			$this->signedIn = true;

		} // end if

	} // end login 

	public function logout(){

		unset($_SESSION['userId']);
		unset($this->userId);
		$this->signedIn = false;

	} // end of logout



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