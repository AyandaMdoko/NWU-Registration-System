<?php
session_start();
if(isset($_SESSION['user_id'])){
  @include('dbconnect.php');
   
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
if(isset($_SESSION['user_id'])) {
    @include('dbconnect.php');
  
    $sql = "SELECT * FROM `course_info` WHERE  course_id = '$resultid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the data
        $info = $result->fetch_assoc();
    }
}

// Define $info as an empty array if it's not set
$info = isset($info) ? $info : [];

// Rest of your HTML code
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="nwu.ico">
<link rel="stylesheet" href="SelfReg.css">
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
      <button class="sidebar-btn" id="POR-btn">
       <img class="sidebar-icons" src="icons/document.png" alt="">
        <div class="sidebar-text">
         POR
        </div>
      </button>
    </div>
     </nav>
  
     <div >
      <h2>
        Self Registration
      </h2>
    </div>
     
    <main style=" display:grid; grid-template-columns: 1fr 1fr 1fr 1fr; margin-right: 10px;">

      <div class="contents" >
        <div style=" display: flex;">
          <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Current Year:</label>
          <input class="textbox-year"  name="year"  required="required" type="text" readonly="2023" value="2024">
        </div>

        <div style=" display: flex; margin-top: 20px;">
          <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Student Number:</label>
          <input class="textbox-stuNum" name="StuNum[]" required="required" type="text" id="EightDigitInput" maxlength="8"  value="<?php echo $info['StudentNumber'];?>" readonly>
        </div>
        
    </div>

    <div class="contents" >
      <div style=" display: flex;">
        <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> Faculty:</label>
        <input class="textbox-faculty" name="faculty" required="required" type="text" readonly=" Economic and Management Sciences" value=" Economic and Management Sciences">
      </div>

      <div style=" display: flex; margin-top: 20px;">
        <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year"> Course Name:</label>
        <input class="textbox-couName" name="course" required="required" type="text" readonly="Bcom Information Systems" value="Bcom Information Systems">
      </div>
      
  </div>

  <div class="contents">
  <div>
    <label style="font-size: 20px; white-space: nowrap; margin-top: 5px;" for="textbox-year">Program Type:</label>
    <div style="display: inline-block; position: relative;">
      <input class="textbox-program" required="required" type="text" id="program-type" name="main" data-second-name="extended">
      <div>
      <a href="#" id="info-icon" style ="display: block; text-align: center; text-decoration: none; font-size: 20px;">
        ℹ️ <!-- You can use a suitable icon here, e.g., Font Awesome icons or an image -->
      </a>
      </div>
    </div>
  </div>
</div>
<script>
  // Add a click event listener to the "i" icon
  const infoIcon = document.getElementById("info-icon");
  infoIcon.addEventListener("click", function(event) {
    event.preventDefault();
   
    alert("Please type in your program name, 'Main Stream' or 'Extended Program' ");
  });
</script>


    </main>

    <main class="selfReg-main"  id="selfReg-main">

      <div > 
        <h1 class="title-heading">Previous Year Results</h1> 

        <div class="textBox-block">
          <table class="firstYear-mainstream" id="first-Year-M">
            <tr class="first-table-row">
              <th></th>
              <th>Modules (First Year MainStream)</th>
              <th>% </th>
              <th>Level</th>
              
            </tr>
      
            <tr id = "row-ALDE111M">
              <td id="ALDE111-Checkbox">
                <input type="checkbox" name="modules[]" id="cb-ALDE111M"  checked disabled >
              </td>
              <td id="ALDE111-Heading"> ALDE 111 Academic Literacy Development</td>
              <td> <input class="textbox-mark_ALDE111M" name="marks[]" type="number" id="mark-ALDE111"  value="<?php echo $info['ALDE111'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text" id="level-ALDE111"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox"  name="modules[]" value="ALDE 111 Academic Literacy Development"  id="cb-ALDE122M"  checked disabled>
              </td>
              <td> ALDE 122 Academic Literacy Development</td>
              <td> <input class="textbox-mark_ALDE122M"  name="marks[]" type="number" id="mark-ALDE122M"  value="<?php echo $info['ALDE122'];?>" readonly ></td>
              <td><input class="textbox-level"  name="level[]" type="text" id="level-ALDE122M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-ACFS111M"  checked disabled>
              </td>
              <td> ACCS 111 Financial Accounting Special</td>
              <td> <input class="textbox-mark_ACFS111"  name="marks[]" type="number" id="mark-ACFS111M"  value="<?php echo $info['ACCS111_or_ACFS111'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text" id="level-ACFS111M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-ACFS121M"  checked disabled>
              </td>
              <td> ACCS 121 Financial Accounting Sepcial</td>
              <td> <input class="textbox-mark_ACFS121" name="marks[]" type="number" id="mark-ACFS121M"  value="<?php echo $info['ACCA121_or_ACFS121'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text"  id="level-ACFS121M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-BMAN111M"  checked disabled>
              </td>
              <td> BMAN 111 Introduction to Business Management</td>
              <td> <input class="textbox-mark_BMAN111M" name="marks[]"  type="number"  id="mark-BMAN111M"  value="<?php echo $info['BMAN111'];?>" readonly></td>
              <td><input class="textbox-level"  name="level[]" type="text"  id="level-BMAN111M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-BMAN121M"  checked disabled>
              </td>
              <td> BMAN 121 General Management</td>
              <td> <input class="textbox-mark_BMAN121M" name="marks[]" type="number" id="mark-BMAN121M"  value="<?php echo $info['BMAN121'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text" id="level-BMAN121M"  readonly></td>
            </tr>
      
            
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-ECON112M"  checked disabled>
              </td>
              <td> ECON 112 Basic Micro-economics</td>
              <td> <input class="textbox-mark_ECON112" name="marks[]" type="number" id="mark-ECON112M"  value="<?php echo $info['ECON112'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text" id="level-ECON112M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-ECON122M"  checked disabled>
              </td>
              <td> ECON 122 Basic Macro-economics </td>
              <td> <input class="textbox-mark_ECON122" name="marks[]" type="number"  id="mark-ECON122M"  value="<?php echo $info['ECON122'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text"  id="level-ECON122M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-INFS113M"  checked disabled>
              </td>
              <td> INFS 113 Introduction to Computers and 
                Programming </td>
              <td> <input class="textbox-mark_INFS113M" name="marks[]" type="number"  id="mark-INFS113M"  value="<?php echo $info['INFS113'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]"type="text"  id="level-INFS113M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-INFS122M"  checked disabled>
              </td>
              <td> INFS 122 Introduction to Programming  </td>
              <td> <input class="textbox-mark_INFS122M" name="marks[]" type="number" id="mark-INFS122M"  value="<?php echo $info['INFS122'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text" id="level-INFS122M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-STFM111M"  checked disabled>
              </td>
              <td> STFM 111 Introductory Statistics  </td>
              <td> <input class="textbox-mark_STFM111" name="marks[]" type="number" id="mark-STFM111M"  value="<?php echo $info['STFM111'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text" id="level-STFM111M"  readonly></td>
            </tr>
      
            <tr>
              <td>
                <input type="checkbox" name="modules[]"  id="cb-STFM125M"  checked disabled>
              </td>
              <td> STFM 125 Calculus & Linear Algebra & Probability & Inference </td>
              <td> <input class="textbox-mark_STFM125" name="marks[]"type="number" id="mark-STFM125M"  value="<?php echo $info['STFM125'];?>" readonly></td>
              <td><input class="textbox-level" name="level[]" type="text" id="level-STFM125M"  readonly></td>
            </tr>
          </table>
         </div>

        </div>
   
      <div > 
      
        <h1 class="title-heading">Current Year Modules</h1> 

        <div class="textBox-block">
          <table class="SecondYear-mainstream" id="Second-Year-M">
            <tr class="first-table-row">
              <th></th>
              <th>Modules (Second Year MainStream)</th>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="module"  value="INFS 211 Object Oriented Programming" id="cb-INFS211M" checked>
              </td>
              <td id ="INFS211M-td"> INFS 211 Object Oriented Programming </td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-INFS212M" checked>
              </td>
              <td id ="INFS212M-td"> INFS 212 Computer Organization and Architecture </td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-INFS213M" checked="isChecked">
              </td>
              <td id ="INFS213M-td"> INFS 213 System Analysis</td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-INFS214M" checked="isChecked">
              </td>
              <td id ="INFS214M-td"> INFS 214 Introduction to Networks</td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-INFS221M" checked="isChecked">
              </td>
              <td id ="INFS221M-td"> INFS 221 Electronic Business</td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-INFS222M" checked="isChecked">
              </td>
              <td id ="INFS222M-td" > INFS 222 Introduction to Databases</td>
            </tr>
          
            
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-INFS223M" checked="isChecked">
              </td>
              <td id ="INFS223M-td"> INFS 223 System Design</td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-INFS224M" checked="isChecked">
              </td>
              <td id ="INFS224M-td"> INFS 224 Web Programming and System Application </td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="" id="cb-WVES222M" checked="isChecked">
              </td>
              <td id = "WVES222M-Heading"> WVES 222  Understanding the World of Economic and Management Science </td>
            </tr>
          </table>
          </div>

        <button class="Procceed-btn"  id="updatePOR">Proceed</button>
          


      
      </div>






    </main>

    <main class="selfReg-extended"  id="selfReg-extended">

      <div > 
        <h1 class="title-heading">Previous Year Results</h1> 

        <div class="textBox-block">
          <table class="firstYear-mainstream" id="first-Year-E">
            <tr class="first-table-row">
              <th></th>
              <th>Module (First Year Extended Program)</th>
              <th>% </th>
              <th>Level</th>
              
            </tr>
      
            <tr>
              <td id="ALDE111E-Checkbox">
                <input type="checkbox" name="module[]" value="ALDE 111 Academic Literacy Development" id="cb-ALDE111E" checked disabled >
              </td>
              <td id="ALDE111E-Heading"> ALDE 111 Academic Literacy Development</td>
              <td> <input class="textbox-mark_ALDE111E" name="mark[]" type="number" id="mark-ALDE111E"  value="<?php echo $info['ALDE111'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-ALDE111E" readonly></td>
            </tr>
      
            <tr>
              <td id="ALDE122E-Checkbox">
                <input type="checkbox" name="module[]" value="ALDE 122 Academic Literacy Development" id="cb-ALDE122E" checked disabled >
              </td>
              <td id="ALDE122E-Heading"> ALDE 122 Academic Literacy Development</td>
              <td> <input class="textbox-mark_ALDE122E" name="mark[]" type="number" id="mark-ALDE122E"  value="<?php echo $info['ALDE122'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-ALDE122E" readonly></td>
            </tr>
      
            <tr>
              <td  id="BMAN111E-Checkbox">
                <input type="checkbox" name="module[]" value="BMAN 111 Introduction to Business Management" id="cb-BMAN111E" checked disabled >
              </td>
              <td  id="BMAN111E-Heading"> BMAN 111 Introduction to Business Management</td>
              <td> <input class="textbox-mark_BMAN111E" name="mark[]" type="number" id="mark-BMAN111E"  value="<?php echo $info['BMAN111'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-BMAN111E" readonly></td>
            </tr>
      
            <tr>
              <td  id="BMAN121E-Checkbox">
                <input type="checkbox" name="module[]" value="BMAN 121 General Managemen" id="cb-BMAN121E" checked disabled >
              </td>
              <td id="BMAN121E-Heading"> BMAN 121 General Management</td>
              <td> <input class="textbox-mark_BMAN121E" name="mark[]" type="number" id="mark-BMAN121E"  value="<?php echo $info['BMAN121'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-BMAN121E" readonly></td>
            </tr>
      
            <tr>
              <td  id="ICOM111E-Checkbox">
                <input type="checkbox" name="module[]" value="ICOM 111 Introduction to Communication" id="cb-ICOM111E" checked disabled >
              </td>
              <td id="ICOM111E-Heading"> ICOM 111 Introduction to Communication</td>
              <td> <input class="textbox-mark_ICOM111" name="mark[]" type="number" id="mark-ICOM111E"  value="<?php echo $info['ICOM111'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-ICOM111E" readonly></td>
            </tr>
      
            <tr>
              <td  id="INFS113E-Checkbox">
                <input type="checkbox" name="module[]" value="INFS 113 Introduction to Computers and Programming " id="cb-INFS113E" checked disabled >
              </td>
              <td id="INFS113E-Heading"> INFS 113 Introduction to Computers and Programming </td>
              <td> <input class="textbox-mark_INFS113E" name="mark[]" type="number" id="mark-INFS113E"  value="<?php echo $info['INFS113'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-INFS113E" readonly></td>
            </tr>
      
            
            <tr>
              <td id="INFS122E-Checkbox">
                <input type="checkbox" name="module[]" value="INFS 122 Introduction to Programming " id="cb-INFS122E" checked disabled >
              </td>
              <td id="INFS122E-Heading"> INFS 122 Introduction to Programming </td>
              <td> <input class="textbox-mark_INFS112E" name="mark[]" type="number" id="mark-INFS122E"  value="<?php echo $info['INFS122'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-INFS122E" readonly></td>
            </tr>
      
            <tr>
              <td  id="MTHS119E-Checkbox">
                <input type="checkbox" name="module[]" value="MTHS 119 Foundation Mathematics 1" id="cb-MTHS119E" checked disabled >
              </td>
              <td id="MTHS119E-Heading"> MTHS 119 Foundation Mathematics 1 </td>
              <td> <input class="textbox-mark_MTHS119" name="mark[]" type="number" id="mark-MTHS119E"  value="<?php echo $info['MTHS119'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-MTHS119E" readonly></td>
            </tr>
      
            <tr>
              <td  id="MTHS129E-Checkbox">
                <input type="checkbox" name="module[]" value="MTHS 129 Foundation Mathematics 1" id="cb-MTHS129E" checked disabled >
              </td>
              <td id="MTHS129E-Heading"> MTHS 129 Foundation Mathematics 1 </td>
              <td> <input class="textbox-mark_MTHS129" name="mark[]" type="number" id="mark-MTHS129E" value="<?php echo $info['MTHS129'];?>" readonly></td>
              <td><input class="textbox-level" name="result[]" type="text" id="level-MTHS129E" readonly></td>
            </tr>
          </table>
         </div>

        </div>

        
      <div > 
        <h1 class="title-heading">Current Year Modules</h1> 

        <div class="textBox-block">
          <table class="SecondYear-mainstream" id="Second-Year-E">
            <tr class="first-table-row">
              <th></th>
              <th>Modules (Second Year Extended Program)</th>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="5XVH01[]" value="ECAT 121 Extension of Critical and Analytical Thinking" id="cb-ECAT121E" checked="isChecked">
              </td>
              <td> ECAT 121 Extension of Critical and Analytical Thinking </td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="5XVH01[]" value=" ECON 112 Basic Micro-economics" id="cb-ECON112E" checked="isChecked">
              </td>
              <td>  ECON 112 Basic Micro-economics </td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="5XVH01[]" value="ECON 122 Basic Macro-economics" id="cb-ECON112E" checked="isChecked">
              </td>
              <td>  ECON 122 Basic Macro-economics</td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="5XVH01[]" value="ICAT 111 Introduction to Critical and Analytical Thinking" id="cb-ICAT111E" checked="isChecked">
              </td>
              <td>  ICAT 111 Introduction to Critical and Analytical Thinking </td>
            </tr>
          
            <tr>
              <td id="INFS221E-Checkbox">
                <input type="checkbox" name="5XVH01[]" value=" INFS 211 Object Oriented Programming" id="cb-INFS211E" checked disabled>
              </td>
              <td id="INFS211E-Heading"> INFS 211 Object Oriented Programming</td>
            </tr>

           
            <tr>
              <td id="INFS212E-Checkbox">
                <input type="checkbox" name="5XVH01[]" value="INFS 212 Computer Organization and Architecture" id="cb-INFS212E" checked disabled>
              </td>
              <td id="INFS212E-Heading"> INFS 212 Computer Organization and Architecture </td>
            </tr>

            <tr>
              <td id="INFS222E-Checkbox">
                <input type="checkbox"name="5XVH01[]" value="INFS 221 Electronic Business" id="cb-INFS221E" checked disabled>
              </td>
              <td id="INFS221E-Heading"> INFS 221 Electronic Business</td>
            </tr>
          

            <tr>
              <td id="INFS223E-Checkbox">
                <input type="checkbox" name="5XVH01[]" value="INFS 222 Introduction to Databases" id="cb-INFS222E" checked disabled>
              </td>
              <td id="INFS222E-Heading"> INFS 222 Introduction to Databases</td>
            </tr>

            <tr>
              <td>
                <input type="checkbox" name="5XVH01[]" value="STFM 111 Introductory Statistics" id="cb-STFM111E" checked="isChecked">
              </td>
              <td> STFM 111 Introductory Statistics</td>
            </tr>
          
            <tr>
              <td>
                <input type="checkbox" name="5XVH01[]" id="cb-STFM125E" value="STFM 125 Calculus & Linear Algebra & Probability & Inference" checked="isChecked">
              </td>
              <td> STFM 125 Calculus & Linear Algebra & Probability & Inference</td>
            </tr>
          </table>
          </div>
      
      </div>
      <div>
      <button class="Procceed-btn"  id="updatePORE">Proceed</button>
      </div>

     

    </main>

  
   <script>
    

document.addEventListener("DOMContentLoaded", function () {
    const secondYearMainstreamTable = document.getElementById("Second-Year-M");
    const firstYearExtendedTable = document.getElementById("first-Year-E");
    const porTable = document.getElementById("POR-TABLE");

    // Function to transfer checked modules
    function transferCheckedModules(sourceTable) {
        const checkboxes = sourceTable.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                const moduleText = checkbox.parentElement.nextElementSibling.textContent;
                const newRow = porTable.insertRow(-1);
                const newCell = newRow.insertCell(0);
                newCell.textContent = moduleText;
            }
        });
    }

    // Transfer modules from the Second-Year-M table
    transferCheckedModules(secondYearMainstreamTable);

    // Transfer modules from the first-Year-E table
    transferCheckedModules(firstYearExtendedTable);
});
    // Add JavaScript to show/hide divs based on program-type input
const programTypeInput = document.getElementById("program-type");
const selfRegMainDiv = document.getElementById("selfReg-main");
const selfRegExtendedDiv = document.getElementById("selfReg-extended");

programTypeInput.addEventListener("input", function () {
  const programTypeValue = programTypeInput.value;

  if (programTypeValue === "Main Stream") {
    selfRegMainDiv.style.display = "block";
    selfRegExtendedDiv.style.display = "none";
  } else if (programTypeValue === "Extended Program") {
    selfRegMainDiv.style.display = "none";
    selfRegExtendedDiv.style.display = "block";
  
  } else {
    // Hide both divs if no value or an unsupported value is entered
    selfRegMainDiv.style.display = "none";
    selfRegExtendedDiv.style.display = "none";
  }
});

// Add code to retrieve keywords from the database and decide which table to show
//const keywordsFromDatabase = ["Main Stream", "Extended Program"]; // Replace with actual keywords from the database

//const tableMainStream = document.getElementById("selfReg-main");
//const tableExtendedProgram = document.getElementById("selfReg-extended");

// Function to determine which table to show based on retrieved keywords
//function showTableBasedOnKeywords(keywords) {
  //if (keywords.includes("Main Stream")) {
   // tableMainStream.style.display = "block";
   // tableExtendedProgram.style.display = "none";
 // }if (keywords.includes("Extended Program")) {
  //  tableMainStream.style.display = "none";
   // tableExtendedProgram.style.display = "block";
//  } else {
    // Hide both tables if no matching keywords are found
   // tableMainStream.style.display = "none";
   // tableExtendedProgram.style.display = "none";
 // }
//}

// Call the function with the retrieved keywords from the database
//showTableBasedOnKeywords(keywordsFromDatabase);




 // JavaScript to prevent unchecking the checkbox
 document.addEventListener("DOMContentLoaded", function() {
        var checkbox = document.getElementById("cb-ALDE111M");
        
        // Disable the checkbox
        checkbox.disabled = true;

        // Prevent click events from changing the checkbox state
        checkbox.addEventListener("click", function(event) {
            event.preventDefault();
        });
    });





   </script> 
   <script src="selfRegBtn.js"></script>
  <script src="selfRegExtended.js"></script>
   <script src="selfRegMain.js"></script>
  <script src="HomePage.js"></script>
  
</body>
</html>

