<?php

session_start();
@include('dbconnect.php');

if(isset($_SESSION['user_id'])){
  @include('dbconnect.php');
   
  $resultid = $_SESSION['user_id'];
  $sql = "SELECT email, stuNum FROM student WHERE id = '$resultid'";
  $result = $conn->query($sql);

  if ($result) {
    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      $userEmail = $user['email'];
      $stunum = $user['stuNum'];
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
    
    $sql = "SELECT FirstName, Surname FROM biographical_info WHERE bio_id = '$resultid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the data
        $bio = $result->fetch_assoc();
    }
}

// Define $info as an empty array if it's not set
$bio = isset($bio) ? $bio : [];

// Rest of your HTML code
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="nwu.ico">
<link rel="stylesheet" href="POR.css">
<link rel="stylesheet" href="Payments.css">
<link rel="stylesheet" href="print.css" media="print">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ" crossorigin="anonymous"></script>
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
      <p>Welcome <span> <?php 
        echo $user["email"];
      ?>  </span></p>
    </div>
       
    </div>
     </header>

     <nav   class="side-bar">

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
         Self Registration
        </div>
      </button>
    </div>

    <div class="sidebar-link">
      <button class="sidebar-btn"  id="POR-btn">
       <img class="sidebar-icons" src="icons/document.png" alt="">
        <div class="sidebar-text">
         POR
        </div>
      </button>
    </div>
     </nav>
  
     <main>
 
    </main>

    <main  id="Payment-content">
      <div class="title-info">
        <h2 >
          Payment Portal
        </h2>

        <p class="notice">Please Indicate whether you are a Cash Paying Sudent or Funded by a Bursary.</p>

        <label class="label-type" for="TypeOfPayment">Select Your Type of Payment:</label>
        <select class="TypeOfPayment" name="" id="paymentSelector">
        <option disabled selected>Select Payment Option</option>
          <option value="cash">Cash Paying Student</option>
          <option value="bursary">Bursary Student </option>

        </select>
      </div>

       <!-- Container for hidden divs -->
    <div class="hidden-container" id="hiddenContainer">
      <div class="centered-div" id="bursaryDiv">
        <div class="wrapper">
          <div class="bursary">
              <p style="color: red;"><b>UPLOAD BURSARY CONFIRMATION LETTER HERE</b></p>
          </div>
          <header>Upload File</header>
          <form action="#">
            <input class="file-input" type="file" name="file" hidden>
            <i class="fas fa-cloud-upload-alt"></i>
            <p style="padding-left: 100px;">Browse File to Upload</p>
            
          </form>
          <section class="progress-area"></section>
          <section class="uploaded-area"></section>
          <button class="procceed-btn"  style="display: none;" id="proceedButtonTwo">Proceed</button>
      </div>
      </div>

      <div class="centered-div" id="financialDiv">
        <div class="container">
          <form action="">
           <div  class = "row">

           
       
               <div class="col">
                   <h3 class="Title"> billing address </h3>

                   <div class="exit-icon" id="exitIcon">
                    <i class="fas fa-times"></i>
                      </div>
       
                   <div class="inputBox">
                       <span>full name </span>
                       <input type="text" placeholder="Nkosinathi ">
                       
                   </div>
                   <div class="inputBox">
                       <span>email </span>
                       <input type="email" placeholder="Nkosinathi@gmail.com ">
                       
                   </div>
                   <div class="inputBox">
                       <span>address </span>
                       <input type="text" placeholder="street -  ">
                       
                   </div>
                   <div class="inputBox">
                       <span>city </span>
                       <input type="text" placeholder="Mahikeng ">
                       
                   </div>
                   <div class="flex">
                       <div class="inputBox">
                           <span>province </span>
                           <input type="text" placeholder="North West ">
                           
                       </div>
                       <div class="inputBox">
                           <span>zip code </span>
                           <input type="text" placeholder="2745 " required maxlength="4">
                           
                       </div>
       
                   </div>
          
               </div>
       
               <div  class="col">
                   <h3  class="Title">payment</h3>
                   
       
                   <div class="inputBox"> 
                       <span>cards accepted </span>
                       <img src="images/card_img.png" alt="">
                       
                   </div>
                   <div class="inputBox">
                       <span>name on card</span>
                       <input type="text" placeholder=" MR NS MNDAWE ">
                       
                   </div>
                   <span>Card number</span>
                   <div class="c-number" id="c-number">
                   <input style=" outline: none; border:none;" id="number" class="cc-number" placeholder="Card number" required maxlength="16">
                   <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                  </div>
                   <div id="cardTypeDisplay" class="card-type-display"></div>
                   <div class="flex1">
                   <div class="inputBox">
                       <span>expiry date </span>
                       <input   id="e-date" placeholder="MM/YY" required maxlength="5" required>
                       
                   </div>
                   </div>
                           <span>CVV </span>
                           <div class="cvv-box" id="cvv-box">
                           <input style=" outline: none; border:none;" id="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3" required>
                           <i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>
                   </div>        
               </div>
           </div>
       
           <input type="submit" value="Make Payment" class="submit-btn">
       
          </form>

          <div class="popup" id="successPopup" style="display: none;">
          <div class="popup-content">
          <i class="fas fa-check-circle success-icon"></i>
          <p class="success-message">Payment of R 11 290 is successful</p>
          <button id="proceedButton">Proceed</button>
         </div>
         </div>   
       </div>
      </div>
    </div>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const paymentContent = document.getElementById("Payment-content");
        const porPage = document.getElementById("POR-Page");
        const proceedButton = document.getElementById("proceedButton");

        function proceedButtonClickHandler() {
            // Hide Payment-content
            paymentContent.style.display = "none";
            // Show POR-Page
            porPage.style.display = "block";
        }

        // Add a click event listener to the "proceedButton"
        proceedButton.addEventListener("click", proceedButtonClickHandler);

        // Now, add the same functionality to "proceedButtonTwo"
        const proceedButtonTwo = document.getElementById("proceedButtonTwo");
        proceedButtonTwo.addEventListener("click", proceedButtonClickHandler);
    });
</script>

    <main style="display: none;" id="POR-Page">

       <div>
         <img class="nwu-por-logo" src="images/NWU-logo.png" alt="">
       </div>

       <div>
        <h2 > PROOF OF REGISTRATION 2024 </h2>
       </div>

      <div style="margin-top: 50px;"> 
       <label class="text-stu" for="">Student Name:</label>
       <input class="textbox-name" type="text" placeholder="student name" value="<?php echo $bio['FirstName'];?> <?php echo $bio['Surname'];?>" readonly>
      </div> 

      <div style=" margin-top: 20px;"> 
        <label  class="text-num"  for="">Student Number:</label>
        <input  class="textbox-num" type="text" placeholder="student number" value="<?php echo $stunum;?>" readonly>
       </div> 

       <div style=" margin-top: 20px; "> 
        <label  class="text-fac"  for="">Faculty:</label>
        <input class="textbox-qua" type="text" readonly value=" Economic Management Sciences" readonly>
       </div> 

       <div style=" margin-top: 20px;"> 
        <label  class="text-name"  for="">Course Name:</label>
        <input  class="textbox-email" type="email" readonly value="Bcom Information Systems" readonly>
       </div> 

      

       <div style="margin-top: 20px;" class="modules">
                <table  id="POR-TABLE">
                    <tr>
                        <th>Modules</th>
                    </tr>
                    
                   
                </table>
            </div>

            <div style="margin-top: 30px">
            <button class="POR-btn" id="print-POR">Print POR</button>
       </div>

    </main>

  <script src="HomePage.js"></script>

  <script>
 document.addEventListener("DOMContentLoaded", function () {
    const printButton = document.getElementById("print-POR");

    printButton.addEventListener("click", function () {
        // Hide the Payment-content
        const paymentContent = document.getElementById("Payment-content");
        paymentContent.style.display = "none";

        // Show only the content you want to print
        const porPage = document.getElementById("POR-Page");
        porPage.style.display = "block";
    

        // Apply print-friendly CSS styles to POR-Page
        porPage.classList.add("print-friendly");

        // Trigger the print dialog
        window.print();

        // Reset the page to its original state
        paymentContent.style.display = "block";
        porPage.style.display = "none";

        // Remove the print-friendly styles
        porPage.classList.remove("print-friendly");
    });
});
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const paymentContent = document.getElementById("Payment-content");
        const porPage = document.getElementById("POR-Page");
        const proceedButton = document.getElementById("proceedButton");

        proceedButton.addEventListener("click", function() {
            // Hide Payment-content
            paymentContent.style.display = "none";
            // Show POR-Page
            porPage.style.display = "block";
        });
    });
</script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
  // Function to show the success popup
  function showSuccessPopup() {
    const successPopup = document.getElementById('successPopup');
    successPopup.style.display = 'block';
  }

  // Function to hide the success popup
  function hideSuccessPopup() {
    const successPopup = document.getElementById('successPopup');
    successPopup.style.display = 'none';
  }



  // Add a click event listener to the "Make Payment" button
  const makePaymentButton = document.querySelector('.submit-btn');
  makePaymentButton.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent the form from submitting

    // Check if all required fields are filled (you can add more validation here)
    const requiredFields = document.querySelectorAll('input[required]');
    const allFieldsFilled = Array.from(requiredFields).every(field => field.value.trim() !== '');

    // Show the success popup only if all fields are filled
    if (allFieldsFilled) {
      showSuccessPopup(); // Show the success popup
    }
  });

  // Add a click event listener to the "Proceed" button in the popup
  const proceedButton = document.getElementById('proceedButton');
  proceedButton.addEventListener('click', function () {
    hideSuccessPopup(); // Hide the success popup
    navigateToNextWindow(); // Navigate to the next window
  });
});

function hidePaymentForm() {
  const paymentForm = document.querySelector('.row');
  hiddenContainer.style.display = 'none';
}

// Add a click event listener to the "x" icon
const exitIcon = document.getElementById('exitIcon');
exitIcon.addEventListener('click', function () {
  hidePaymentForm(); // Hide the payment form
});

// Function to identify the card type based on the card number
function identifyCardType(cardNumber) {
  // Define regular expressions for different card types
  const cardPatterns = {
    visa: /^4\d{15}$/,
    mastercard: /^5[1-5]\d{14}$/,
    amex: /^3[47]\d{13}$/,
    discover: /^6(?:011|5\d{2})\d{12}$/
    // Add more card types and patterns as needed
  };

  for (const cardType in cardPatterns) {
    if (cardPatterns[cardType].test(cardNumber)) {
      return cardType;
    }
  }

  return "Unknown"; // Card type not identified
}

// Function to update the card type display
function updateCardTypeDisplay(cardType) {
  const cardTypeDisplay = document.getElementById('cardTypeDisplay');
  cardTypeDisplay.textContent = cardType;
}

// Add an input event listener to the card number input
const cardNumberInput = document.getElementById('number');
cardNumberInput.addEventListener('input', function () {
  const cardNumber = cardNumberInput.value.replace(/\s/g, ''); // Remove spaces
  const cardType = identifyCardType(cardNumber);
  updateCardTypeDisplay(cardType);
});
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const porTable = document.getElementById("POR-TABLE");

    if (urlParams.has("modules")) {
      const selectedModules = urlParams.get("modules").split(',');

      // Clear the POR-TABLE
      porTable.innerHTML = '<tr><th>Modules</th></tr>';

      // Add selected modules to the POR-TABLE
      selectedModules.forEach((module) => {
        const newRow = porTable.insertRow(-1);
        const newCell = newRow.insertCell(0);
        newCell.textContent = module;
      });
    }
  });
</script>
  <script>
 
 function addModulesToPOR(selectedModules) {
        const porTable = document.getElementById("POR-TABLE");

        selectedModules.forEach((module) => {
            const newRow = porTable.insertRow(-1);
            const newCell = newRow.insertCell(0);
            newCell.textContent = module;
        });
    }

    // Check if the URL contains a modules query parameter
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has("modules")) {
        const modules = urlParams.get("modules").split(',');
        addModulesToPOR(modules);
    }
</script>


</body>
</html>