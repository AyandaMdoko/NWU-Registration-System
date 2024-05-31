<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/dbconnect.php";

$sql = "SELECT * FROM student
        WHERE reset_token_hash = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

?>
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
    <a class="Reg-Process" href="helpMenu.php">Registeration Process</a>
   
  </div>
   
   <div class="middle-section">
    <button class="sign-up">
      Sign-Up
    </button>
  </div>

  </header>

  <main class="home-page-grid">

    <form class="icon-block">
      <div class="container">
        <img class="home-icon"   src="icons/Testimonial1.a77f289bd399d1ca12eedf62459e64ea 1.png" alt="">
      </div>
      <p class="icon-p">
        It All Starts Here!
      </p>
    </form>

    <form class="login-form"  method="POST" action="process_reset_password.php"> 
      <div class="title-info">
        <h1>
          Reset Your Password
        </h1> 

        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

        <p class="p-paragraph">
           New Password
        </p>
        <div class="password-info">
          <input class="textB-password" name="password" type="password" id="password" required >
          <img class="eye-icon" src="icons/eye close.png" onclick="pass()" id="eyeopen-icon">
        </div>

        <p class="p-paragraph">
          Confirm New Password
       </p>
       <div class="password-info">
         <input class="textB-password" name="cpassword" type="password" id="password" required >
       
       </div>
       
        <button class="login-btn">
          Submit
        </button>

      </div>

    </form>
    <script src="Registeration.js"></script>
  </main>

</body>
</html>