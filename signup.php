<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> NWU Registeration</title>
  <link rel="icon" href="nwu.ico">
  <link rel="stylesheet" href="Registeration.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
  

  
</head>
<body>
  <header class="header">

   <div class="left-section"><img class="nwu-pic"  src="images/nwu logo edited.jpg" alt=""> 
    <a class="Reg-Process" href="helpMenu.html">Registeration Process</a>
   
  </div>
   
   

  </header>

  <main class="home-page-grid">

    <div class="icon-block">
      <div class="container">
        <img class="home-icon" src="icons/Testimonial1.a77f289bd399d1ca12eedf62459e64ea 1.png" alt="">
      </div>
      <p class="icon-p">
        It All Starts Here!
      </p>
</div>

    <form class="login-form"  action="process-signup.php" method="post" id="registrationForm" onsubmit=" return validateForm(); "> 
      <div class="title-info">
        <h1>
          Sign up for the registration System
        </h1> 
        <?php
    
      ?>
        <p >
          University Email
        </p>
        <input class="textB-uniEmail" type="text" name="email" id="email" placeholder="University email" >
       
        
        <p class="stuNum-text">
          Student Number
        </p>
        <input class="textB-uniEmail" type="text" name="stuNum" id="stuNum" placeholder="Student Number"  maxlength="8">
        

        <p class="p-paragraph">
           Password
        </p>
        <div class="password-info">
          <input class="textB-password" type="password" name="password" id="password" maxlength="8" >
          <img class="eye-icon" src="icons/eye close.png" onclick="pass()" id="eyeopen-icon">
        </div>
        

        <p class="p-paragraph">
          Confirm Password
       </p>
       <div class="password-info">
         <input class="textB-password" type="password" name="cpassword" id="cpassword"  maxlength="8">
       </div>
       
       
        <button type="submit" class="login-btn" name="submit">
          Submit
        </button>

       
      </div>
 
      

      
    </form>

    <script src="signup.js"></script>
    <script src="Registeration.js"></script>


  </main>

 
  
  

</body>
</html>