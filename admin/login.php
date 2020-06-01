<?php require_once("includes/header.php");?>
<?php 

if($session->isSignedIn()){
	redirect("index.php");
}

if(isset($_POST['submit'])){
	$userName = trim($_POST['userName']);
	$password = trim($_POST['password']);

	//method to check database user

	$userFound = User::verifyUser($userName, $password);


	if($userFound){
		$session->login($userFound);
		redirect("index.php");
	}else{
		$theMessage = "Your password or user name are incorrect";
	} //end nested if else
}else{

	$theMessage = "";

	$userName = "";
	$password = "";

} // end if else

?>

<div class="col-md-4 col-md-offset-3">

<h4 class="bg-danger"><?php //echo $theMessage; ?></h4>
	
<form id="login-id" action="" method="post">
	
<div class="form-group">
	<label id="login-id" for="username">Username</label>
	<input type="text" class="form-control" name="userName" value="<?php echo htmlentities($userName); ?>" >

</div>

<div class="form-group">
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
	
</div>


<div class="form-group">
<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</div>


</form>


</div>

