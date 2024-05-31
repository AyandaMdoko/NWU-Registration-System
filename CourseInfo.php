<?php

if(isset($_POST['save'])){

@include('dbconnect.php');

  $year = $_POST['year'];
  $StudentNum = $_POST['StuNum'];
  $UniMail = $_POST['UniMail'];
  $Faculty = $_POST['faculty'];
  $CourseName = $_POST['course'];
  $mainStreamPro = isset($_POST['main']) ? $_POST['main'] : '';
  $extendedPro = isset($_POST['extended']) ? $_POST['extended'] : '';
  $ALDE111 = $_POST['ALDE111'];
  $ALDE122 = $_POST['ALDE122'];
  $BMAN111 = $_POST['BMAN111'];
  $BMAN121 = $_POST['BMAN121'];
  $INFS113 = $_POST['INFS113'];
  $INFS122 = $_POST['INFS122'];
  $ACCS111_or_ACFS111 = $_POST['ACFS111'];
  $ACCA121_or_ACFS121 = $_POST['ACFS121'];
  $ECON112 = $_POST['ECON112'];
  $ECON122 = $_POST['ECON122'];
  $STFM111 = $_POST['STFM111'];
  $STFM125 = $_POST['STFM125'];
  $ALDE111E = $_POST['ALDE111E'];
  $ALDE122E = $_POST['ALDE122E'];
  $BMAN111E = $_POST['BMAN111E'];
  $BMAN121E = $_POST['BMAN121E'];
  $INFS113E = $_POST['INFS113E'];
  $INFS122E = $_POST['INFS122E'];
  $ICOM111 = $_POST['ICOM111'];
  $MTHS119 = $_POST['MTHS119'];
  $MTHS129 = $_POST['MTHS129'];
  
if($mainStreamPro){

  $mainStream = "INSERT INTO `course_info`(`StudentNumber`, `CourseName`, `Faculty`, `UniMail`, `Current_Year`, `Curriculum`, `ALDE111`, `ALDE122`, `BMAN111`, `BMAN121`, `INFS113`, `INFS122`, `ACCS111_or_ACFS111`, `ACCA121_or_ACFS121`, `ECON112`, `ECON122`, `STFM111`, `STFM125`)
VALUES ('$StudentNum', '$CourseName', ' $Faculty', '$UniMail', '$year', '$mainStreamPro', '$ALDE111', '$ALDE122', '$BMAN111', '$BMAN121', '$INFS113', '$INFS122', '$ACCS111_or_ACFS111', '$ACCA121_or_ACFS121', '$ECON112', '$ECON122', '$STFM111', '$STFM125')";
$main = mysqli_query($conn, $mainStream);

}
else if($extendedPro){

  $sql = "INSERT INTO `course_info`(`StudentNumber`, `CourseName`, `Faculty`, `UniMail`, `Current_Year`, `Curriculum`, `ALDE111`, `ALDE122`, `BMAN111`, `BMAN121`, `INFS113`, `INFS122`, `ICOM111`, `MTHS119`, `MTHS129`)
  VALUES ('$StudentNum', '$CourseName', ' $Faculty', '$UniMail', '$year', '$extendedPro', '$ALDE111E', '$ALDE122E', '$BMAN111E', '$BMAN121E', '$INFS113E', '$INFS122E', '$ICOM111', '$MTHS119', '$MTHS129')";
  $ext = mysqli_query($conn, $sql);

}

  header('location:CourseInfo.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> NWU Application</title>
  <link rel="icon" href="nwu.ico">
  <link rel="stylesheet" href="Course.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="application.js"></script>
</head>
<body>
  <header class="header">
    <div class="left-section">
    <img class="nwu-pic"  src="images/nwu logo edited.jpg" alt="">
    </div>
    <div class="middle-section">
      Results Capturing Process
    </div>
  </header>

 

  <h1> Course Information</h1>

  <p>Complete the information below if you are a under graduate student in Bcom Information Systems.
    </p>

    <form class="information-section"  method="POST" >
      <form class="information-section">

        <div class=".information-block">
          <p>
            Current Year <span class="req">*</span>
          </p>
        </div>
       <div class="textBox-block">
        <input class="textbox-year"  name="year"  required="required" type="type" readonly="2023" value="2024">
       </div>

       <form class="information-section">
        <div class=".information-block">
          <p>
            Student Number <span class="req">*</span>
          </p>
        </div>
       <div class="textBox-block">
        <input class="textbox" name="StuNum" required="required" type="type" id = "EightDigitInput" maxlength="8">
       </div>

       <div class=".information-block">
        <p>
          University Email <span class="req">*</span>
        </p>
      </div>
     <div class="textBox-block">
      <input class="textbox-faculty" name="UniMail"  required="required" type="type" maxlength="20">
     </div>

       <div class=".information-block">
        <p>
          Faculty <span class="req">*</span>
        </p>
      </div>
     <div class="textBox-block">
      <input class="textbox-faculty"  name="faculty"  required="required" type="type" readonly=" Economic and Management Sciences" value=" Economic and Management Sciences">
     </div>

     <div class=".information-block">
      <p>
        Course Name<span class="req">*</span>
      </p>
    </div>
   <div class="textBox-block">
    <input class="textbox-faculty"  name="course" required="required" type="type" readonly="Bcom Information Systems" value="Bcom Information Systems">
   </div>

      <div class=".information-block">
        <p>
          Course Year <span class="req">*</span>
        </p>
      </div>
     <div class="textBox-block">
      
        <ol>
          <li>
            First Year (Main Stream)
            <input class="checkbox" type="checkbox" id="firstYear-M" name="main" value= "Main Stream" onclick="isChecked()" >
          </li>
           
          <li>
            First Year (Extended Program)
            <input class="checkbox" type="checkbox" id="firstYear-E" name="extended"  value = "Extended Program" onclick="isChecked()" >
          </li>
        
        </ol>
     </div>

     <div class=".information-block">
    </div>
   <div class="textBox-block">
    <table class="firstYear-mainstream" id="first-Year-M">
      <tr class="first-table-row">
        <th></th>
        <th>Modules (First Year MainStream)</th>
        <th>% <span class="req">*</span></th>
        <th>Level</th>
        <th>Delete</th>
      </tr>

      <tr>
        <td>
          <input type="checkbox" id="cb-ALDE111M" value="ALDE 111 Academic Literacy Development" checked="isChecked">
        </td>
        <td> ALDE 111 Academic Literacy Development</td>
        <td> <input class="textbox-mark" name="ALDE111" type="number" id="mark-ALDE111"></td>
        <td><input class="textbox-level" type="text" id="level-ALDE111"  readonly></td>
        <td><button class="btn-delete" id="clearBtn"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox"  value="ALDE 122 Academic Literacy Development"  id="cb-ALDE122M" checked="isChecked">
        </td>
        <td> ALDE 122 Academic Literacy Development</td>
        <td> <input class="textbox-mark"  name="ALDE122" type="number" id="mark-ALDE122"></td>
        <td><input class="textbox-level" type="text" id="level-ALDE122"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox" id="cb-ACFS111M" checked="isChecked">
        </td>
        <td> ACFS 111 Financial Accounting Special</td>
        <td> <input class="textbox-mark"  name="ACFS111" type="number" id="mark-ACFS111M" ></td>
        <td><input class="textbox-level" type="text" id="level-ACFS111M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox" id="cb-ACFS121M" checked="isChecked">
        </td>
        <td> ACFS 121 Financial Accounting Sepcial</td>
        <td> <input class="textbox-mark" name="ACFS121" type="number" id="mark-ACFS121M"></td>
        <td><input class="textbox-level" type="text"  id="level-ACFS121M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox" id="cb-BMAN111M" checked="isChecked">
        </td>
        <td> BMAN 111 Introduction to Business Management</td>
        <td> <input class="textbox-mark" name="BMAN111"  type="number"  id="mark-BMAN111M"></td>
        <td><input class="textbox-level" type="text"  id="level-BMAN111M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox"  id="cb-BMAN121M" checked="isChecked">
        </td>
        <td> BMAN 121 General Management</td>
        <td> <input class="textbox-mark" name="BMAN121" type="number" id="mark-BMAN121M"></td>
        <td><input class="textbox-level" type="text" id="level-BMAN121M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      
      <tr>
        <td>
          <input type="checkbox" id="cb-ECON112M" checked="isChecked">
        </td>
        <td> ECON 112 Basic Micro-economics</td>
        <td> <input class="textbox-mark" name="ECON112" type="number" id="mark-ECON112M"></td>
        <td><input class="textbox-level"  type="text" id="level-ECON112M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox"  id="cb-ECON122M" checked="isChecked">
        </td>
        <td> ECON 122 Basic Macro-economics </td>
        <td> <input class="textbox-mark" name="ECON122" type="number"  id="mark-ECON122M"></td>
        <td><input class="textbox-level" type="text"  id="level-ECON122M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox"  id="cb-INFS113M" checked="isChecked">
        </td>
        <td> INFS 113 Introduction to Computers and 
          Programming </td>
        <td> <input class="textbox-mark" name="INFS113" type="number"  id="mark-INFS113M"></td>
        <td><input class="textbox-level" type="text"  id="level-INFS113M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox" id="cb-INFS122M" checked="isChecked">
        </td>
        <td> INFS 122 Introduction to Programming  </td>
        <td> <input class="textbox-mark" name="INFS122" type="number" id="mark-INFS122M"></td>
        <td><input class="textbox-level" type="text" id="level-INFS122M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox" id="cb-STFM111M" checked="isChecked">
        </td>
        <td> STFM 111 Introductory Statistics  </td>
        <td> <input class="textbox-mark" name="STFM111" type="number" id="mark-STFM111M"></td>
        <td><input class="textbox-level" type="text" id="level-STFM111M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>

      <tr>
        <td>
          <input type="checkbox" id="cb-STFM125M" checked="isChecked">
        </td>
        <td> STFM 125 Calculus & Linear Algebra & Probability & Inference </td>
        <td> <input class="textbox-mark" name="STFM125" type="number" id="mark-STFM125M"></td>
        <td><input class="textbox-level" type="text" id="level-STFM125M"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
    </table>
   </div>

   
   <div class=".information-block">
  </div>
  <div class="textBox-block">
    <table class="firstYear-Extended" id="first-Year-E">
      <tr class="first-table-row">
        <th></th>
        <th>Module (First Year Extended Program)</th>
        <th>% <span class="req">*</span></th>
        <th>Level</th>
        <th>Delete</th>
      </tr>
  
      <tr>
        <td>
          <input type="checkbox" id="cb-ALDE111E" checked="isChecked">
        </td>
        <td> ALDE 111 Academic Literacy Development</td>
        <td> <input class="textbox-mark" name="ALDE111E" type="number" id="mark-ALDE111E"></td>
        <td><input class="textbox-level" type="text" id="level-ALDE111E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
  
      <tr>
        <td>
          <input type="checkbox" id="cb-ALDE122E" checked="isChecked">
        </td>
        <td> ALDE 122 Academic Literacy Development</td>
        <td> <input class="textbox-mark" name="ALDE122E" type="number"  id="mark-ALDE122E"></td>
        <td><input class="textbox-level" type="text" id="level-ALDE122E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
  
      <tr>
        <td>
          <input type="checkbox" id="cb-BMAN111E" checked="isChecked">
        </td>
        <td> BMAN 111 Introduction to Business Management</td>
        <td> <input class="textbox-mark" name="BMAN111E" type="number"  id="mark-BMAN111E"></td>
        <td><input class="textbox-level" type="text" id="level-BMAN111E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
  
      <tr>
        <td>
          <input type="checkbox"  id="cb-BMAN121E" checked="isChecked">
        </td>
        <td> BMAN 121 General Management</td>
        <td> <input class="textbox-mark" name="BMAN121E" type="number" id="mark-BMAN121E"></td>
        <td><input class="textbox-level" type="text" id="level-BMAN121E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
  
      
      <tr>
        <td>
          <input type="checkbox" id="cb-ICOM111E" checked="isChecked">
        </td>
        <td> ICOM 111 Introduction to Communication</td>
        <td> <input class="textbox-mark" name="ICOM111" type="number" id="mark-ICOM111E"></td>
        <td><input class="textbox-level" type="text" id="level-ICOM111E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
  
      <tr>
        <td>
          <input type="checkbox" id="cb-INFS113E" checked="isChecked">
        </td>
        <td> INFS 113 Introduction to Computers and 
          Programming </td>
        <td> <input class="textbox-mark" name="INFS113E" type="number" id="mark-INFS113E"></td>
        <td><input class="textbox-level" type="text" id="level-INFS113E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
  
      <tr>
        <td>
          <input type="checkbox" id="cb-INFS122E" checked="isChecked">
        </td>
        <td> INFS 122 Introduction to Programming  </td>
        <td> <input class="textbox-mark" name="INFS122E" type="number" id="mark-INFS122E"></td>
        <td><input class="textbox-level" type="text" id="level-INFS122E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
      
  
      <tr>
        <td>
          <input type="checkbox" id="cb-MTHS119E" checked="isChecked">
        </td>
        <td> MTHS 119 Foundation Mathematics 1 </td>
        <td> <input class="textbox-mark" name="MTHS119" type="number" id="mark-MTHS119E"></td>
        <td><input class="textbox-level" type="text" id="level-MTHS119E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
  
      <tr>
        <td>
          <input type="checkbox" id="cb-MTHS129E" checked="isChecked">
        </td>
        <td> MTHS 129 Foundation Mathematics 1 </td>
        <td> <input class="textbox-mark" name="MTHS129" type="number" id="mark-MTHS129E"></td>
        <td><input class="textbox-level" type="text" id="level-MTHS129E"  readonly></td>
        <td><button class="btn-delete"><img class="icon-delete" src="icons/icons8-trash-48.png" alt=""></button></td>
      </tr>
    </table>
   </div>

<div>
  <button type="submit" class="save-btn"  value="Save" name="save"  onclick="checkMark()">
    Save
  </button>
</div>

<div>
  <button type="button" class="next-btn" value="Next" name="save" id="next-btn" onclick="checkMark()" >
    Next >>
  </button>
</div>


    </form>
</body>
</html>