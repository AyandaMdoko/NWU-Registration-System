<?php
session_start();
if(isset($_SESSION['user_id'])){
  @include('dbconnect.php');
   
  $resultid = $_SESSION['user_id'];
  $sql = "SELECT email FROM student WHERE id = '$resultid'";
  $result = $conn->query($sql);

  if ($result) {
    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      $userEmail = $user['email'];
    } else {
      echo "User not found in the database.";
    }
  } else {
    echo "Database query failed: " . $conn->error;
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="nwu.ico">
<link rel="stylesheet" href="HomePage.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>NWU Registration Portal</title>
</head>
<body>
 <style>


 </style>
    <header class="header">
      
      <div class="left-section"><img class="nwu-pic"  src="images/nwu logo edited.jpg" alt=""> 
     </div>

     <div class="middle-section">
      <h1> Registration Portal</h1>
     </div>
     
     
     <div class="right-section">
      <div >
        <a class="Logout-link"  href="Registeration.php">Log-out</a>
      </div>
      <div>
      <?php if (isset($userEmail)): ?>
        <p> Welcome <?=$userEmail; ?> </p>
     <?php endif;?>
  
    </div>
    </div>
     </header>

     <nav class="side-bar">

     <div class="sidebar-link">
       <button class="sidebar-btn" id="newsFeed-btn">
        <img class="sidebar-icons" src="icons/home.png" alt="">
         <div class="sidebar-text">
          News Feed
         </div>
       </button>
     </div>

     <div class="sidebar-link">
      <button class="sidebar-btn" id="updateInfo-btn">
       <img class="sidebar-icons" src="icons/refresh.png" alt="">
        <div class="sidebar-text">
         Update Info
        </div>
      </button>
    </div>

    <div class="sidebar-link">
      <button class="sidebar-btn" id="selfReg-btn">
       <img class="sidebar-icons" src="icons/update.png" alt="">
        <div class="sidebar-text">
         Self Registeration
        </div>
      </button>
    </div>



    <div class="sidebar-link" >
      <button class="sidebar-btn"  id="POR-btn">
       <img class="sidebar-icons" src="icons/document.png" alt="">
        <div class="sidebar-text">
         POR
        </div>
      </button>
    </div>
     </nav>
  
     <main>
      <h2>
        NWU News Feed
      </h2>

      <div class="slider">
        <div class="slides">
              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">

              

              <div class="slide first">
                <div  class="title"> <a class="title-link" href="OnlineReg.php" target="_blank">Closing Dates For Registration</a> </div>
                 <img src="images/NWU Registration Slide.png" alt="">
              </div>
              
             
              <div class="slide">
                <div class="title"> <a class="title-link" href="Bursary.php"  target="_blank">Student Bursary 2024</a> </div>
               <img src="images/Busary Funding.jpg" alt="">
               
            </div>

            <div class="slide">
              <div class="title"> <a class="title-link" href="userManuals/NWU STUDENT RES.pdf" target="_blank">OFF Campus Residence</a> </div>
             <img src="images/Residences.png" alt="">
          </div>

          <div class="slide">
            <div class="title"> <a class="title-link" href="userManuals/career center.pdf" target="_blank">NWU Career Center </a> </div>
           <img src="images/Career Center.jpg" alt="">
        </div>

        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>


        <div class="navigation-manual">
         <label for="radio1" class="manual-btn"></label>
         <label for="radio2" class="manual-btn"></label>
         <label for="radio3" class="manual-btn"></label>
         <label for="radio4" class="manual-btn"></label>
        </div>

        </div>
     </div>
    </main>
    
    <button class="Next-btn" id="nextH-btn">
      Next
    </button>

    

    
  <script src="HomePage.js"></script>
  <script>
    
document.getElementById("nextH-btn").addEventListener("click", function(){
  window.location.href = "UpdateInfo.php";
})
  </script>
</body>
</html>

