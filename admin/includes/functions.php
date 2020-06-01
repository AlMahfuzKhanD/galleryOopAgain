<?php



function classAutoloader($class){

	$class = strtolower($class);
	$path = "includes/{$class}.php";

	if(is_file($path) && !class_exists($class)){
		include $path;
	}

} // end classAutoloader

spl_autoload_register('classAutoloader');

function redirect($location){
	header("Location: {$location}");
}

?>