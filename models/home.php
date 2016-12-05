<?php
session_start();
include_once("dBConnect.php");
//include_once("compose.php");
if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$result =  $username. " is now Logged In";
	}
	else {
		$result = "Not logged in";
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
	
	</div>
<div style="float:left;" class="nav-container">
  <ul class="nav">
    <li class="active">
      <a href="#">
        <span class="icon-home"></span>
        <span class="text">home</span>
      </a>
    </li>
    <li>
      <a id = "inbox">
        <span class="icon-headphones"></span>
        <span class="text">INBOX</span>
      </a>
      </li>
     <li>
      <a id = "compose" >
        <span class="icon-user"></span>
        <span class="text">Compose</span>
      </a>
      </li>
    <li>
      <a href="sent.html">
        <span class="icon-picture"></span>
        <span class="text">SENT</span>    
      </a>
    </li>
    <li>
    	<a href = "logout.php">
        <span class="icon-facetime-video"></span>
		<span class="text">LOGOUT</span>
      </a>
    </li>
  </ul>
</div>
<div style="float:center; margin-left:490px;">
	<div>
		<div>
		</div>
		<div id="content-area">
		</div><!--contentent-area-->
	</div>

</div>
<hr>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../static/JS/home.js"></script>
</body>
</html>