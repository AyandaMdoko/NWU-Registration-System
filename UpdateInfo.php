<?php
session_start();
@include('dbconnect.php');
if(isset($_SESSION['user_id'])){
  
   
  $resultid = $_SESSION['user_id'];
  $sql = "SELECT email,stuNum FROM student WHERE id = '$resultid'";
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

<?php

@include('dbconnect.php');
if(isset($_POST['update'])){

  
  $Surname = $_POST['surname'];
  $Initials = $_POST['initials'];
  $Tittle = $_POST['title'];
  $FirstNames = $_POST['firstName'];
  $Nickname = $_POST['nickname'];
  $MaidenName = $_POST['maiden'];
  $MaritalStatus = $_POST['marital'];
  $ReligousAffiliation = $_POST['religen'];
  $CorreLanguage = $_POST['correLanguage'];
  $Disability = $_POST['disability'];
  $AssistiveDevice = $_POST['assistiveDev'];
  $Specify = $_POST['specify'];


  $sql = "UPDATE `biographical_info` SET `Initials`='$Initials', `Surname`='$Surname', `Tittle`='$Tittle', `FirstName`='$FirstNames', `Nickname`='$Nickname', `Maiden_Name`='$MaidenName', `Marital_Status`='$MaritalStatus', `Religous_affiliation`='$ReligousAffiliation', `Disabilities`='$Disability', `Assistive_device`='$AssistiveDevice', `Specify`='$Specify' WHERE bio_id = '$resultid'";

  $Bio = mysqli_query($conn, $sql);

  $CellNum = $_POST['cellNum'];
  $email = $_POST['email'];
  $ConCode = $_POST['code'];

  $contacts = "UPDATE `contactinfo` SET `email`='$email',`code`='$ConCode',`cellNumber`='$CellNum' WHERE Cont_id = '$resultid'";
  $con = mysqli_query($conn, $contacts);
   
}

?>
<?php

if(isset($_SESSION['user_id'])) {
    
  
    $get = "SELECT email, code, cellNumber FROM `contactinfo` WHERE Cont_id = '$resultid'";
    $result = $conn->query($get);
    $cont= $result->fetch_assoc();

    $sql = "SELECT * FROM `biographical_info` WHERE bio_id = '$resultid'";
    $result = $conn->query($sql);
    $bio= $result->fetch_assoc();
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="nwu.ico">
<link rel="stylesheet" href="HomePage.css">
<link rel="stylesheet" href="UpdateInfo.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>NWU Registration Portal</title>
</head>
<body>
 
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
      <button class="sidebar-btn" id="finance-btn">
       <img class="sidebar-icons" src="icons/hand.png" alt="">
        <div class="sidebar-text">
          Finance 
        </div>
      </button>
    </div>

    <div class="sidebar-link">
      <button class="sidebar-btn" id="POR-btn">
       <img class="sidebar-icons" src="icons/document.png" alt="">
        <div class="sidebar-text">
         POR
        </div>
      </button>
    </div>
     </nav>
  
     <main>
      <h2>
        Update Information
      </h2>
    </main>

   <div class="container">
    
   <header>Biographical Information</header>
    <form  class="form active" id="biographicalForm" method="POST">
          

     <div class="contents" >
      <div style=" display: flex; align-items:center; ">
        <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Nationality</label>
        <input class="textbox-nation"  name="nationality"  type="text" value="<?php echo $bio['Nationality'];?>" raedonly> 
      </div>

      <div style=" display: flex; align-items:center; margin-top: 15px ;  ">
        <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Surname</label>
        <input class="textbox-surname" name="surname" type="text"  value="<?php echo $bio['Surname'];?>">
      </div>
      </div>

      <div class="contents" >
        <div style=" display: flex; align-items:center;  ">
          <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Initials</label>
          <input class="textbox-initials"  name="initials" type="text" value="<?php echo $bio['Initials'];?>" >
        </div>
  
        <div style=" display: flex; align-items:center; margin-top: 15px">
          <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Date of Birth</label>
          <input class="textbox-DOB" name="DOF"  type="date"  value="<?php echo $bio['Date_of_Birth'];?>" readonly>
        </div>
        </div>

        <div class="contents" >
          <div style=" display: flex; align-items:center;  ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Title</label>
            <input class="textbox-title"  name="title"   type="text" value="<?php echo $bio['Tittle'];?>" >
          </div>
    
          <div style=" display: flex; align-items:center; margin-top: 15px ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Gender</label>
            <input class="textbox-gender" name="gender"  type="text" value="<?php echo $bio['Gender'];?>" readonly >
          </div>
        </div>

        <div class="contents" >
          <div style=" display: flex; align-items:center; ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Identity Number:</label>
            <input class="textbox-ID"  name="IDnumber"  type="text"  maxlength="13" value="<?php echo $bio['IDnumber'];?>" readonly>
          </div>
    
          <div style=" display: flex; align-items:center; margin-top: 15px">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> First Names</label>
            <input class="textbox-firstN" name="firstName"  type="text" value="<?php echo $bio['FirstName'];?>" >
          </div>
        </div>

        <div class="contents" >
          <div style=" display: flex; align-items:center; ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Nickname</label>
            <input class="textbox-nickname"  name="nickname"  type="text" value="<?php echo $bio['Nickname'];?>"  >
          </div>
    
          <div style=" display: flex; align-items:center; margin-top: 15px ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> Maiden Name</label>
            <input class="textbox-mainame" name="maiden"  type="text" value="<?php echo $bio['Maiden_Name'];?>" >
          </div>
        </div>

        <div class="contents" >
          <div style=" display: flex; align-items:center; ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Maritial Status</label>
            <input class="textbox-status"  name="marital"  required="required" type="text" value="<?php echo $bio['Marital_Status'];?>" >
          </div>
    
          <div style=" display: flex; align-items:center; margin-top: 15px">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> Realigous Affiliation</label>
            <input  name="religen" class="selectionbox-RA" value="<?php echo $bio['Religous_affiliation'];?>" readonly>
              
          </div>
        </div>

        <div class="contents" >
          <div style=" display: flex; align-items:center; ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> Population Group</label>
            <input class="textbox-population"  name="population" type="text" value="<?php echo $bio['Population_group'];?>" readonly >
          </div>
    
          <div style=" display: flex; align-items:center; margin-top: 15px">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> Race</label>
            <input  name="race" class="selectionbox-R" <?php echo $bio['Race'];?> readonly>
             
          </div>
        </div>

        <div class="contents" >
          <div style=" display: flex; align-items:center;  ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> Home Language </label>
            <input name="homeLanguage" class="selectionbox-HL" value="<?php echo $bio['Home_Language'];?>"  readonly>
              
          </div>
    
          <div style=" display: flex; align-items:center; margin-top: 15px ">
            <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Correspondence Language</label>
            <input  name="correLanguage" class="selectionbox-CL" value="<?php echo $bio['Correspondence_language'];?>"  readonly>
             
          </div>
        </div>

        <div class="contents" >
          <div style=" display: flex; align-items:center;  ">
            <label style="font-size: 20px; white-space: nowrap; " for="textbox-year"> Disabilities / Conditions</label>
            <input  name="disability" class="selectionbox-dis" value="<?php echo $bio['Disabilities'];?>" readonly>
             
          </div>
    
          <div style=" display: flex; align-items:center; ">
            <label style="font-size: 20px; " for="textbox-year"> Do you make use of any <br> assistive device(s)
              e.g.</br> wheelchair, hearing aid, etc? </label>
              <input class="textbox-use"  name="assistiveDev" type="text" value="<?php echo $bio['Assistive_device'];?>"  >
          </div>
        </div>

        <div class="contents"  >
          <div style=" display: flex; align-items:center; ">
            <label style="font-size: 20px;  " for="textbox-year">  Specify Device(s)</label>
            <input class="textbox-devices"  name="specify"  type="text" value="<?php echo $bio['Specify'];?>">
          </div>
        </div>

        <header>Contact Information</header></br>
       
     

      <div style=" display: flex; align-items:center; ">
              <label style="font-size: 20px; white-space: nowrap; margin-top: 5px; margin-left: 25px;" for="textbox-number"> Cell Phone</label>
              <input class="textbox_Cell"  name="code" type="text" placeholder="+27" id="home-Num" maxlength="3" value="<?php echo $cont['code'];?>">
              <input class="textbox_CellNum"  name="cellNum" type="text" placeholder="e.g 820000000" id="homeNum" maxlength="9" value="<?php echo $cont['cellNumber'];?>">
            </div>

       <div style=" display: flex; align-items:center; ">
          <label style="font-size: 20px; white-space: nowrap; margin-top: 5px; margin-left: 35px;" for="textbox-email"> Email Address</label>
          <input class="textbox-EMAIL"  name="email" type="email" value="<?php echo $cont['email'];?>" > 
</div>
        
        
        <div class="contents" >
          <div style=" display: flex; align-items:center; margin-top: 60px ">
            <button class="Update-btn" type="submit" name="update">
              Update
            </button>
          </div>
        </div>
       
    </form>
   </div>

<button class="Next-btn" id="nextU-btn">
        Next
  </button>
    

  <script>
 document.getElementById("nextU-btn").addEventListener("click", function(){
  window.location.href = "SelfReg.php";
})
  </script>
  <script src="HomePage.js"></script>
</body>
</html>