<?php
    session_start();
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'cheapoU';
    
    $mailfrom = $_SESSION["id"];
    
    if(isset($_POST['Send'])){
        $connect=mysql_connect($host,$username,$password);
        if(!$connect){
            die('Not connected :'.mysql_error());
            echo "<p style:'color=red, font-size = 50px' >An Error Occoured<p><BR>";
            echo "<p>click <a href='add.php'>here</a> to go back<p>";
        }
        else{
            mysql_select_db('cheapoU',$connect);
            $message = $_POST['message'];
            $user_to = $_POST["mailto"];
            $subject = $_POST['subject'];
            
            $sql = "select id from users where username = '$user_to' ;";
            $result = mysql_query($sql,$connect);
            $row = mysql_fetch_row($result);
            $mailto = $row[0];
            
            echo $mailto;
            
            $update_query = "INSERT INTO message(subject,body,user_id,recipient_id)
            VALUES('$subject','$message','$mailfrom','$mailto');";
            $result = mysql_query($update_query,$connect);
            mysql_close($connect);
        }
        header("Location: home.php");
        exit;
    }
?>