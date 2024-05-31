
    
//Functionality for the eye icon
var eye;

function pass(){
  if (eye == 1){
    document.getElementById("password").type= "password";
    document.getElementById("eyeopen-icon").src="icons/eye close.png";
    eye = 0;
  }
  else{
    document.getElementById("password").type= "text";
    document.getElementById("eyeopen-icon").src="icons/eye.png" ;
    eye = 1;
  }
}

// JavaScript to handle the button click event
document.getElementById("sign-up").addEventListener("click",function(){
  window.location.href = "signup.php";
})

