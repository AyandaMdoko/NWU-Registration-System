<?php

if(isset($_POST['save'])){

  @include('dbconnect.php');
  
  

  $Nationality = $_POST['nationality'];
  $Surname = $_POST['surname'];
  $Initials = $_POST['initials'];
  $DateOfBirth = $_POST['DOF'];
  $Tittle = $_POST['tittle'];
  $Gender = $_POST['gender'];
  $IDnumber = $_POST['IDnumber'];
  $FirstNames = $_POST['firstNames'];
  $Nickname = $_POST['nickname'];
  $MaidenName = $_POST['maiden'];
  $MaritalStatus = $_POST['marital'];
  $ReligousAffiliation = $_POST['religen'];
  $PopulationGroup = $_POST['population'];
  $Race = $_POST['race'];
  $HomeLanguage = $_POST['homeLanguage'];
  $CorreLanguage = $_POST['correLanguage'];
  $Disability = $_POST['disability'];
  $AssistiveDevice = $_POST['assistiveDev'];
  $Specify = $_POST['specify'];

  $sql = "INSERT INTO `biographical_info`(`Nationality`, `Initials`, `Surname`, `Tittle`,  `Gender`, `Date_of_Birth`, `IDnumber`, `FirstName`, `Nickname`, `Maiden_Name`, `Marital_Status`, `Religous_affiliation`, `Population_group`, `Race`, `Home_Language`, `Correspondence_language`, `Disabilities`, `Assistive_device`, `Specify`)
  VALUES ('$Nationality','$Initials','$Surname','$Tittle', '$Gender','$DateOfBirth','$IDnumber','$FirstNames','$Nickname','$MaidenName','$MaritalStatus','$ReligousAffiliation','$PopulationGroup','$Race','$HomeLanguage','$CorreLanguage','$Disability','$AssistiveDevice','$Specify')";
   $Bio = mysqli_query($conn, $sql);
   
   header('location:ParentsInfo.php');
   

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> NWU Application</title>
  <link rel="icon" href="nwu.ico">
  <link rel="stylesheet" href="application.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<body>
  <header class="header">
    <div class="left-section">
     <img class="nwu-pic"  src="images/download.png" alt="">
    </div>
    <div class="middle-section">
      Application Process
    </div>
  </header>

  <div class="top-section-buttons">
    <div>
      <button class="Biographical-btn">
        <a class="url" href="Biographical.php" >Biographical</a>
      </button>
    </div>

    <div>
       <button class="ParentsInfo-btn">
        <a class="url" href="ParentsInfo.php" >Parents Information</a>
    </button>
  </div>
   
<div>
  <button class="ContactInfo-btn">
    <a class="url" href="ContactInfo.php" >Contact Infomation</a>
  </button>
</div>
   
<div>
  <button class="CourseInfo-btn">
    <a class="url" href="CourseInfo.php" >Course Information</a>
  </button>
</div>  
  </div>

 
<h1 >
  Biographical Information
</h1>
<p>
  If any of the information in the grey fields below are incorrect, the supporting documents should be presented 
  to the registration office in order that the rectifications can be made.
</p>
<p>
  Please note that only fields marked with a star are mandatory.
</p>

<form class="information-section" action="" method="POST">
  <div  class=".information-block">
    <p>
      Nationality <span class="req">*</span>
    </p>
  </div>
 <div  class="textBox-block">
  <input class="textbox" id="Nationality" name="nationality" required="required" type="type">
 </div>

 <div class=".information-block">
  <p>
    Surname  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox"  name="surname" required="required" type="text">
</div>

<div class=".information-block">
  <p>
    Initials  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox-initials" name="initials" required="required" type="text">
</div>

<div class=".information-block">
  <p>
    Date of Birth <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="DOB" name="DOF" required="required" type="date">
</div>

<div class=".information-block">
  <p>
    Title <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox-Title"  name="tittle" required="required" type="text">
</div>

<div class=".information-block">
  <p>
    Gender  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox-Gender"  name="gender" required="required"  type="text">
</div>

<div class=".information-block">
  <p>
    Identity Number <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox" required="required"  name="IDnumber" type="text" id = "IdBio" maxlength="13">
</div>

<div class=".information-block">
  <p>
    First Names <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox" required="required"  name="firstNames" type="text">
</div>

<div class=".information-block">
  <p>
    Nickname  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox" required="required" name="nickname" type="text">
</div>

<div class=".information-block">
  <p>
    Maiden Name
  </p>
</div>
<div class="textBox-block">
<input class="textbox" name="maiden"  type="text">
</div>

<div class=".information-block">
  <p>
    Maritial Status  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox" required="required" name="marital" type="text">
</div>

<div class=".information-block">
  <p>
    Religous Affiliation
  </p>
</div>
<div class="textBox-block">
<select  name="religen" class="selectionBox">
<option value=""></option>
  <option value="Afr. Prot. Church">Afr. Prot. Church</option>
  <option value="African Methodist Ep">African Methodist Ep</option>
  <option value="Anglican Church">Anglican Church</option>
  <option value="Apostolic Church">Apostolic Church</option>
  <option value="Apostolic Faith Miss">Apostolic Faith Miss</option>
  <option value="Assembly Of God">Assembly Of God</option>
  <option value="Baha'i Faith">Baha'i Faith</option>
  <option value="Baptist Church">Baptist Church</option>
  <option value="Boeddhis">Boeddhis</option>
  <option value="Cal.prot.Church">Cal.prot.Church</option>
  <option value="Calvinist Church">Calvinist Church</option>
  <option value="Chris Fellow">Chris Fellow</option>
  <option value="Chris Science">Chris Science</option>
  <option value="Christian">Christian</option>
  <option value="Christian Reformed">Christian Reformed</option>
  <option value="Church Of Chris">Church Of Christ</option>
  <option value="Church Of Eng">Church Of Eng</option>
  <option value="Congregational">Congregational</option>
  <option value="Cvsa">Cvsa</option>
  <option value="Dutch Ref Mission">Dutch Ref Mission</option>
  <option value="Dutch Reformed">Dutch Reformed</option>
  <option value="Evangelies-luth">Evangelies-luth</option>
  <option value="Full Gospel Church">Full Gospel Church</option>
  <option value="Gospel Reformed">Gospel Reformed</option>
  <option value="Greek Ortho.">Greek Ortho.</option>
  <option value="Harv Chris Fel">Harv Chris Fel</option>
  <option value="Hebrew Church">Hebrew Church</option>
  <option value="Hindu">Hindu</option>
  <option value="His People Christian">His People Christian</option>
  <option value="Ifcc">Ifcc</option>
  <option value="Islam">Islam</option>
  <option value="Jehova">Jehova</option>
  <option value="Jewish Church">Jewish Church</option>
  <option value="Methodist Church">Methodist Church</option>
  <option value="Morawian Church">Morawian Church</option>
  <option value="Mormon">Mormon</option>
  <option value="Moslem">Moslem</option>
  <option value="National Church">National Church</option>
  <option value="No Church">No Church</option>
  <option value="Nvt">Nvt</option>
  <option value="Old Apostolic">Old Apostolic</option>
  <option value="Other">Other</option>
  <option value="Pentecost Prot">Pentecost Prot</option>
  <option value="">Pentecostalist</option>
  <option value="Philadelphia">Philadelphia</option>
  <option value="Presbyterian">Presbyterian</option>
  <option value="Protestant">Protestant</option>
  <option value="Reformed Church">Reformed Church</option>
  <option value="Rhema Church">Rhema Church</option>
  <option value="Roman Catholic">Roman Catholic</option>
  <option value="Sewe Dag Advent. Ker">Sewe Dag Advent. Ker</option>
  <option value="Unknown">Unknown</option>
  <option value="Wesleyan">Wesleyan</option>
  <option value="Zion Christian">Zion Christian</option>
</select>
</div>

<div class=".information-block">
  <p>
    Population Group  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox" required="required" name="population" type="text">
</div>

<div class=".information-block">
  <p>
    Race  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
 <select class="selectionBox"  name="race" required="required"> 
 <option value=""></option>
  <option value="Asian">Asian</option>
  <option value="Black">Black</option>
  <option value="Coloured">Coloured</option>
  <option value="Other">Other</option>
  <option value="White">White</option>
   
 </select>
</div>

<div class=".information-block">
  <h2>
    Language Preferences
  </h2>
</div>
<div class="textBox-block"></div>

<div class=".information-block">
  <p>
    Home Language  <span class="req">*</span>
  </p>
</div>
<div class="">
  <select  name="homeLanguage" class="selectionBox" required="required" >
  <option value=""></option>
    <option value="Afr/eng">Afr/eng</option>
    <option value="Afrikaans">Afrikaans</option>
    <option value="English">English</option>
    <option value="Ndebele">Ndebele</option>
    <option value="Sepedi">Sepedi</option>
    <option value="Sesotho">Sesotho</option>
    <option value="Swati">Swati</option>
    <option value="Tsonga">Tsonga</option>
    <option value="Tswana">Tswana</option>
    <option value="Venda">Venda</option>
    <option value="Xhosa">Xhosa</option>
    <option value="Zulu">Zulu</option>
   </select>
</div>

<div class=".information-block">
  <p>
    Correspondence Language  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
  <select name="correLanguage" class="selectionBox" required="required" > 
    <option value=""></option>
    <option value="Afrikaans">Afrikaans</option>
    <option value="English">English</option>
   </select>
</div>

<div class=".information-block">
  <h2>
    Disabilities / Conditions
  </h2>
</div>
<div class="textBox-block"></div>

<div class=".information-block">
  <p>
    Disabilities / Conditions
  </p>
</div>
<div  class="textBox-block">
<select class="selectionBox" name="disability">
<option value=""></option>
  <option value="Amputation">Amputation</option>
  <option value="Allergy">Allergy</option>
  <option value="Asthma">Asthma</option>
  <option value="Back Problems">Back Problems</option>
  <option value="Bacl Meningitis">Bacl Meningitis</option>
  <option value="Blind">Blind</option>
  <option value="Cerebral Paralysis">Cerebral Paralysis</option>
  <option value="Clumbfeet">Clumbfeet</option>
  <option value="Deafness">Deafness</option>
  <option value="Diabetes">Diabetes</option>
  <option value="Dyslexia">Dyslexia</option>
  <option value="Epilepsy">Epilepsy</option> 
  <option value="Eye disfunction(Gen)">Eye disfunction(Gen)</option>
  <option value="Foot Operation">Foot Operation</option>
  <option value="Haemophilia">Haemophilia</option>
  <option value="Heart Disease">Heart Disease</option>
  <option value="High Blood Pressure">High Blood Pressure</option>
  <option value="Learning Disability">Learning Disability</option>
  <option value="Low Blood Pressure">Low Blood Pressure</option> 
  <option value="Neck Injury">Neck Injury</option>
  <option value="Other">Other</option>
  <option value="Partially Sighted">Partially Sighted</option>
  <option value="Pers.mot.disf.">Pers.mot.disf.</option>
  <option value="Porphyria">Porphyria</option>
  <option value="Psychological Prob.">Psychological Prob.</option> 
  <option value="Rheumatism">Rheumatism</option>
  <option value="Scoliosis">Scoliosis</option>
  <option value="Speech Defect">Speech Defect</option>
  <option value="TB">TB</option> 
  <option value="Wheelchair">Wheelchair</option>
  <option value="Scoliosis">Scoliosis</option>
  <option value="Speech Defect">Speech Defect</option>
  <option value="Wheelchair">Wheelchair</option> 
  <option value="Writing Disability">Writing Disability</option> 
</select>
</div>

<div class=".information-block">
  <p>
    Do you make use of any assistive device(s)
      e.g. wheelchair, hearing aid, etc?  <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
<input class="textbox" name="assistiveDev" required="required" type="text">
</div>

<div class=".information-block">
  <p>
    Specify Device(s)
  </p>
</div>
<div class="textBox-block">
<input class="textbox" name="specify"  type="text">
</div>

<div>
          <button type="submit" value="Save" name="save" class="save-btn" id="save-btn" >
            Save
          </button>
        </div>

        <div>
          <button type="submit" class="next-btn"  name="save"  value="Save" id=next-btn>
            Next >>
          </button>
        </div>


</form>

<script src="application.js"></script>
</body>
</html>