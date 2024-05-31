<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="nwu.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup successful</title>
</head>
<body>
 <style>
  body{
  position: relative;
  background-color:  rgb(101, 46, 168);
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh ;
}
::selection{
  color: #ececec;
  background: #00b3ff;
}
.form{
  position: relative;
  background-color: #f2f3f7;
  width: 100%;
  max-width: 500px;
  border-radius: 12px;
  box-shadow: -3px 3px 10px -5px rgba(0,0,0,0.2);
  padding: 30px 30px;
  text-align: center;
}
h2{
  font-size: 30px;
  font-weight: 700;
}
p{
  font-size: 30px;
  padding-bottom: 8px ;
}
.error-text{

  text-align: center;

  

  margin-left: 55px;
  margin-bottom: 35px;
  width: 380px;
  height: 32px;
  font-size: 30px;
  padding-top: 10px;
}
.verify-btn{
  background-color: rgb(101, 46, 168);
  width: 460px;
  height: 50px;
  font-size: 25px;
  color: #cacaca;
  font-weight: 600;
  border-radius: 10px;
}
 </style>

<div class="form">
        <h2>NWU SignUp Confirmation</h2>
        <p>You have successfully SignUp to the system. <br>You can Login </br></p>       
        <div>
         <button type="submit" id="loginbtn" class="verify-btn">
            Login
          </button>
        </div>
      
   </div>
 
   <script>
    // JavaScript to handle the button click event
    document.getElementById("loginbtn").addEventListener("click",function(){
    window.location.href = "Registeration.php";
})
   </script>
</body>
</html>