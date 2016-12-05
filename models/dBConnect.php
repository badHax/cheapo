<?php
$server = "localhost";
$username = "kritique1";
$password = "";
$database = "cheapoU";
$dbport = 3306;

$dbCon = mysqli_connect($server,$username,$password,$database, $dbport);
mysqli_query ($dbCon,"SELECT * FROM users");

if ($dbCon ->connect_error) {
    die("Connection failed: " . $dbCon->connect_error);
}

?>