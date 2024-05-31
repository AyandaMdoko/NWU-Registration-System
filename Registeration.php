
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  @include('dbconnect.php');
  
  $UniMail = $_POST['email'];
  $Password = $_POST['password'];

  $select = "SELECT id, email FROM student WHERE email = '$UniMail' AND password_hash = '$Password' LIMIT 1";
  $result = mysqli_query($conn, $select);

  if($result && mysqli_num_rows($result) > 0){
    session_start();

    $user = mysqli_fetch_assoc($result);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];

    header("Location: HomePage.php");
  } else {
    echo '<script language="javascript">';
    echo 'alert("Incorrect email or password")';
    echo '</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> NWU Registration</title>
  <link rel="icon" href="nwu.ico">
  <link rel="stylesheet" href="Login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="Registeration.js"></script>
</head>
<body>
  <header class="header">

   <div class="left-section"><img class="nwu-pic"  src="images/nwu logo edited.jpg" alt=""> 
    <a class="Reg-Process" href="helpMenu.php">Registration Process</a>
    <h1 class="title-head"> Registration Portal</h1>
  </div>
   
 

  </header>

  <main class="home-page-grid">

    <div class="icon-block">
      <div class="container">
        <img class="home-icon"   src="icons/Testimonial1.a77f289bd399d1ca12eedf62459e64ea 1.png" alt="">
        
      </div>
      <p class="icon-p">
        It All Starts Here!
      </p>
</div>


    <form method="post" class="login-form"> 
      <div class="title-info">
        <h1>
          Welcome to the NWU Registration System
        </h1> 

        <div>
        <p >
          University Email
        </p>
        <input class="textB-uniEmail" type="text" name="email" placeholder="University email" required maxlength="25" value="<?= htmlspecialchars($_POST["email"] ?? "")?>">
        </div>
        <p class="p-paragraph">
          Password
        </p>
        <div class="password-info">
          <input class="textB-password" type="password" name="password" id="password"  required maxlength="8">
          <img class="eye-icon" src="icons/eye close.png" onclick="pass()" id="eyeopen-icon" >
        </div>
        
        <a class="forgot-password" href="Forgot_password.php"> Forgot Password</a>

        <button  class="login-btn">
          Login
        </button>

        <p>
          Not Signed in Yet <a class="signUp-link" href="signup.php"> Sign-Up</a>
        </p>
      </div>
 
      
    </form>
  </main>
  
</body>
</html>