<?php
session_start();
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$database = 'cheapoU';

//error_reporting(0);

if (isset($_POST["AddUser"])) {
	$user = $_POST["username"];
	$pass = $_POST["pass"];
	$hpassword = password_hash($pass,PASSWORD_DEFAULT);
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$dbCon = mysqli_connect($host,$username,$password,$database);
	if(!$dbCon){
		die('Not Connected :'.mysqli_connect_error());
	}
	else{
		mysqli_select_db('cheapoU',$dbCon);
		mysqli_query($dbCon,"INSERT INTO users (`username`, `password`, `firstname`, `lastname`) VALUES ('$user','$hpassword','$firstname','$lastname')");
		mysqli_close($dbCon);
		header("Location: login.php");
		exit;
	}
}

if ($dbCon ->connect_error) {
    die("Connection failed: " . $dbCon->connect_error);
}
?>

<html>
	<head>
		<title> CheapoMailHome </title>
		<link rel="stylesheet" type="text/css" href="../static/css/CheapoH.css">
		<link rel="stylesheet" type="text/css" href="../static/css/CheapoB.css">
	</head>
	<body>
	<div class="header">
	<img class="logo" src="../static/images/CHEAPOMAIL.png"/>
		<div>
			<form method="post" autocomplete="on">
						
						 <div>
							<label for="firstnamesignup" class="fname" >FIRSTNAME</label>
							<input class="field" name="firstname" required="required" type="text" placeholder="eg. John">
						</div>
						<br>
						<div>
							<label for="lastnamesignup" class="lname" >LASTNAME</label>
							<input class="field" name="lastname" required="required" type="text" placeholder="eg. Smith">
						</div>
						<br>
						<div>
							<label for="usernamesignup" class="uname" >USERNAME</label>
							<input class="field" name="username" required="required" type="text" placeholder="eg. J.Smith">
						</div>
						<br>
						<div>
							<label for="emailsignup" class="youmail" > Your Email</label>
							<input class="field" name="email" required="required" type="email" placeholder="eg. J.Smith@gmail.com">
						</div>
						<br>
						<div>
							<label for="passwordsignup" class="youpasswd" >Your Password </label>
							<input class="field" name="pass" required="required" type="password" placeholder="mypassword">
					  	</div>
						<br>
					  	<div>
							<label for="passwordsignup_confirm" class="youpasswd">Confirm Password </label>
							<input class="field" name="pass_con" required="required" type="password" placeholder="mypassword">
						 </div>
						<br>
					  <div>
						<input type="submit" value = "Submit"  name="AddUser">
					</div>
				</form>
			</div>
		</div>

</body>
</html>