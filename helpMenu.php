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
  <script src="Registeration.js"></script>
</head>
<body>
  <style>
    body{
      padding-left: 20px;
      padding-right: 20px;
    }
  </style>
  <header class="header">

   <div class="left-section"><img class="nwu-pic"  src="images/nwu logo edited.jpg" alt=""> 
   <a class="Reg-Process" href="Registeration.php">Login System</a>
    <h1 class="title-head">Registeration Portal</h1>
 
  </div>
   
   
  </header>

  <main class="help-block">
  <h1 class="help-title">
    How to use our Registeration System.
  </h1>

  <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr;">

  <div >
    <div>
      <h1 class="video-title" >
        Login System
      </h1>
    </div>
    
    <div>
      <video class="video-content"  controls loop>
        <source style="width: 100px;" src="video/Login.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton">
        View PDF Manual
      </button>
    </div>
     
  </div>

  <div>
    <div>
      <h1 class="video-title" >
        Forgot Password
      </h1>
    </div>
    
    <div>
      <video class="video-content" controls loop>
        <source style="width: 100px;" src="video/Forgot Password.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton-Fpass">
        View PDF Manual
      </button>
    </div>
  </div>

  <div >
    <div>
      <h1 class="video-title" >
        News Feed
      </h1>
    </div>
    
    <div>
      <video class="video-content" controls loop>
        <source style="width: 100px;" src="video/NewsFeed.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton-NewsFeed">
        View PDF Manual
      </button>
    </div>
  </div>

  <div >
    <div>
      <h1 style="margin-left: 70px;" class="video-title" >
        Update Information
      </h1>
    </div>
    
    <div>
      <video class="video-content" controls loop>
        <source style="width: 100px;" src="video/UpdateInfo.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton-UpdateInfo">
        View PDF Manual
      </button>
    </div>
  </div>

  <div style=" margin-top: 40px;">
    <div>
      <h1 style="margin-left: 70px;" class="video-title" >
        Self Registeration
      </h1>
    </div>
    
    <div>
      <video class="video-content"  controls loop>
        <source style="width: 100px;" src="video/SelfReg.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton-SelfReg">
        View PDF Manual
      </button>
    </div>
     
  </div>

  <div style="  margin-top: 40px;">
    <div>
      <h1 style="margin-left: 75px;" class="video-title"  >
        Financial System
      </h1>
    </div>
    
    <div>
      <video class="video-content" controls loop>
        <source style="width: 100px;" src="video/payment.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton-Payment">
        View PDF Manual
      </button>
    </div>
  </div>

  <div style=" margin-top: 40px;" >
    <div>
      <h1 style="margin-left: 70px;" class="video-title" >
        Proof Registeration
      </h1>
    </div>
    
    <div>
      <video class="video-content" controls loop>
        <source style="width: 100px;" src="video/POR.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton-POR">
        View PDF Manual
      </button>
    </div>
  </div>

  <div style="  margin-top: 40px;">
    <div>
      <h1 style="margin-left: 70px;" class="video-title" >
        Module Explaination
      </h1>
    </div>
    
    <div>
      <video class="video-content" controls loop>
        <source style="width: 100px;" src="video/Modules.mp4" type="video/mp4">
      </video>
    </div>

    <div>
      <button class="pdf-manual" id="viewPdfButton-modules">
        View PDF Manual
      </button>
    </div>
  </div>

  </div>
  

  </main>

  <script>
      document.getElementById('viewPdfButton').addEventListener('click', function() {
       window.open('userManuals/Login.pdf', '_blank');
      });

      document.getElementById('viewPdfButton-Fpass').addEventListener('click', function() {
       window.open('userManuals/forgot password.pdf', '_blank');
      });

      document.getElementById('viewPdfButton-NewsFeed').addEventListener('click', function() {
       window.open('userManuals/Newsfeed.pdf', '_blank');
      });

      document.getElementById('viewPdfButton-UpdateInfo').addEventListener('click', function() {
       window.open('userManuals/Update_Information.pdf', '_blank');
      });

      document.getElementById('viewPdfButton-Payment').addEventListener('click', function() {
       window.open('userManuals/payment (bursary)_merged.pdf', '_blank');
      });

      document.getElementById('viewPdfButton-SelfReg').addEventListener('click', function() {
       window.open('userManuals/self-registration.pdf', '_blank');
      });

      document.getElementById('viewPdfButton-modules').addEventListener('click', function() {
       window.open('userManuals/self reg2.pdf', '_blank');
      });

      document.getElementById('viewPdfButton-POR').addEventListener('click', function() {
       window.open('userManuals/POR1.pdf', '_blank');
      });


  </script>


</body>
</html>