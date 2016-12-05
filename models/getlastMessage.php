<?php 
session_start();
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$database = 'cheapoU';

$dbCon = mysql_connect($host,$username,$password,$database);
//mysql_query ($dbCon,"SELECT * FROM users");

//if ($dbCon ->connect_error) {
  //  die("Connection failed: " . $dbCon->connect_error);
//}

/*$sql = "INSERT INTO message('subject',body','user_id','recipient_id')
            VALUES('".$subject."','".$message."','".$mailfrom."','".$mailto."');";
$data = $sql;
    if(mysqli_query($dbCon,$sql)){
        $lastMessage = mysql_insert_id($dbCon);
        echo "Last message inserted is:" . $lastMessage;
    }
    else{
        echo "Error:" . $sql . "<br>" . mysqli_error($dbCon);
    }
mysqli_close($dbCon);  */
mysql_select_db('cheapoU',$dbCon);
$result= mysql_query('SELECT body FROM message
                        ORDER  BY message.id DESC  LIMIT 1;',$dbCon) or die('Invalid query: ' . mysql_error($dbCon));

while ($row = mysql_fetch_assoc($result)){
    echo $row['id'];
    echo $row['body'];
    $data = $row['id'];
    $data2 = $row['body'];
}
echo json_encode($data);
echo json_encode($data);
mysql_free_result($result);
?>