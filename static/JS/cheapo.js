document.ready(function()
{
  
  function login() {
  	alert('goes');
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("login_form").innerHTML =this.responseText;
        alert ('stops');
      }
    };
    xhttp.open("GET", "../models/login.php?login=YES", true);
    xhttp.send();
  }
  
  function logout(){
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
  		if(this.readyState == 4 && this.status ==200){
  			document.getElementById("logout-button").innerHTML =this.responseText;
  		}
  	};
  	xhttp.open("GET","logout.php",true);
  	xhttp.send();
  }
});