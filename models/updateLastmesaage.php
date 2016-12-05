<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
        <script type="text/javascript" src="../static/JS/updateMail.js"></script>
    </head>
    <body>
        <h2> client message test example</h2>
        <div id="output">Message should be shown here</div>
        
       
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous">
  
        $(function(){
        
            $.ajax({
            url: 'getlastMessage.php',
            type: 'GET',
            data:{
                
            } ,
            
            dataType: 'json',
            success: function(data){
               var messageid = data[0];
               var messagebody = data[1];
               $('#output').html("<p>id:</p>"+messageid+"<p>body:</p>"+messagebody);
                }
           
                
            });
        });
            
        </script>
    </body>
</html>