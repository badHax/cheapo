/*function updateMailBox(mail){
    var lastMail = mysqli_insert_id($dBCon)
    $.get("compose.php",{lastMail: mail}, function(response){
        if(response != lastMail){
            lastMail = mail;
        }
    });
}
var timer = setInterval(function() {updateMailBox(mail)}, 5000);
*/

 $(function(){
        
            $.ajax({
            url: 'getlastMessage.php',
            data:{
                userFrom : "*",
                messageID: 0;
            }
            dataType: 'json',
            success: function(data){
               var messageid = data[0];
               var messagebody = data[1];
               $('#output').html("<p>id:</p>"+messageid+"<p>body:</p>"+messagebody);
                }
            });
        });