<?php

@include('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> NWU Registration</title>
  <link rel="icon" href="nwu.ico">
  <link rel="stylesheet" href="Registeration.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  
</head>
<body>
  <header class="header">

   <div class="left-section"><img class="nwu-pic"  src="images/nwu logo edited.jpg" alt=""> 
    <a class="Reg-Process" href="helpMenu.php">Registration Process</a>
    
  </div>
   
 

  </header>

  <main class="home-page-grid">

    <form class="icon-block" >
      <div class="container">
        <img class="home-icon"   src="icons/Testimonial1.a77f289bd399d1ca12eedf62459e64ea 1.png" alt="">
      </div>
      <p class="icon-p">
        It All Starts Here!
      </p>
    </form>

    <form class="login-form"  method="POST" action="send_password_reset.php"> 
      <div class="title-info">
        <h1>
          Forgotten Your Password
        </h1> 

        <p>Please enter your school student email that entails @mynwu to Reset your password.</p>

        <p >
          University Email
        </p>
        <input class="textB-uniEmail" type="email" name="email" id="UniMail" placeholder="University email" required>

        <button class="login-btn">
          Submit
        </button>
      </div>
    </form>
    <script src="Registeration.js"></script>
  </main>

</body>
</html>