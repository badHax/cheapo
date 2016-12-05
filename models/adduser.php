<?php

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'cheapoU';

if (isset($_POST["AddUser"]))
    {
        $connect=mysql_connect($host,$username,$password);
        if(!$connect){
            die('Not connected :'.mysql_error());
            echo "<p style:'color=red, font-size = 50px' >An Error Occoured<p><BR>";
            echo "<p>click <a href='add.php'>here</a> to go back<p>";
        }
        else{
            mysql_select_db('cheapoU',$connect);
            $password=$_POST['pass'];
            $username = $_POST[];
            $hpassword=password_hash($password,PASSWORD_DEFAULT);
            $_POST['pass']=$hpassword;
            $sql="INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`) VALUES
            ('$_POST[username]', '$_POST[lastname]', '$_POST[username]','$_POST[pass]')";
            
            //echo($_POST['firstname'].$_POST['lastname'].$_POST['username'].$_POST['pass']);
            
            mysql_query($sql,$connect);
            mysql_close($connect);
            //echo($sql);
            header("Location: login.php");
            exit;
        }
}
?>