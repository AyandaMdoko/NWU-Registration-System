<?php

 session_start();

 if (isset($_SESSION["sign_up_id"])){

  @include('dbconnect.php');

  $sql = "SELECT * FROM sign_up WHERE id = {$_SESSION["sign_up_id"]}";

  $result = $conn->query($sql);

  $user = $result->fetch_assoc();


 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <title>Home</title>
</head>
<body>

<h1>Welcome to our page</h1>

<?php if (isset($user)): ?>

  <p>Hello <?= htmlspecialchars($user["email"]) ?></p>

  <p><a href="logout.php">Logout</a></p>

  <?php else: ?>

    <p><a href="login.php">login </a> or <a href="Signup.php">Sign up</a></p>

    <?php endif; ?>
  
</body>
</html>