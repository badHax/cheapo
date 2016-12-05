<?php
session_start();
include_once("dBConnect.php");
///code is now functioning
$dbCon = mysqli_connect($host,$username,$password,$database);

if(isset($_GET['login'])) {	
	$username = $_GET["username"];
	$user_password = $_GET["password"];
	
	
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$query = mysqli_query($dbCon,$sql);
	$row = mysqli_fetch_row($query);
	$id = $row[0];
	$dbUname = $row[1];
	$dbPass = $row[2];
	
	$rand = 'rand';
	$randh = password_hash($rand,PASSWORD_DEFAULT);

	
	if (password_verify('1234', $dbPass)) {
		$_SESSION['username'] = $dbUname;
		$_SESSION['id'] = $id;
		header("Location: home.php");
		exit;
		}
		else {
		echo $dbPass;
		echo "=====================>";
			echo password_hash('user',PASSWORD_DEFAULT);
		}
	}

?>
<!DOCTYPE html>
<!-- CODE IS NOW FUNCTIONING -->
	<head>
		<title> CheapoMailHome </title>
		<link rel="stylesheet" type="text/css" href="../static/css/CheapoH.css">
		<script src="../static/JS/cheapo.js"></script>
		 <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
	</head>
	<body>
		
	<div class="header">
	<img class="logo" src="../static/images/CHEAPOMAIL.png"/>
	
	</div>
	<div id = "login_form" class="login-form">
	<fieldset>
	<form method = "GET" class="login" id="login-form">
    <p>
      <label for="login">Username:</label>
      <input type="text" name="username" id="username" placeholder="username">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="password" >
    </p>

    <p class="login-submit">
      <button type="submit" name ="login" class="login-button" id="login">Login</button>
    </p>

    <p class="forgot-password"><a href=#>Forgot your password?</a></p>
    
    <p class="sign-up"><a href="models/add.php">Create Account</a></p>
    
  </form>
  </fieldset>
</div>
	
	</body>
</html>