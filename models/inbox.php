//TODO: Handle AJAX update queries
<?php 
session_start();
include_once("dBConnect.php");
    if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$result =  $username. " is now Logged In";
	}
	else {
		$result = "Not logged in";
		}


?>