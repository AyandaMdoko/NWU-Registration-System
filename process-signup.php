<?php

@include('dbconnect.php');
 

if (! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
  $error[] = '"Valid email is required"';

 }
 

 if (empty($_POST["stuNum"])){
  $error[] = 'Student Number is required';
 
 }

 if(strlen($_POST["password"]) < 8){
  $error[] = 'Password must be at least 8 characters';
  
 }

 if(! preg_match("/[a-z]/i", $_POST["password"])){
  $error[] = 'Password must contain at least one letter';
 
 }
 if(! preg_match("/[0-9]/i", $_POST["password"])){
  $error[] = 'Password must contain at least one number';
  
 }

 if($_POST["password"] !== $_POST["cpassword"]){
  $error[] = 'Password must match';

 }

 $password_hash = $_POST["password"];

 $sql = "INSERT INTO student (email, stuNum, password_hash) VALUES (?, ? , ?)";

 $stmt = $conn ->stmt_init();

 if(! $stmt ->prepare($sql)){
  die("SQL error: ".$conn ->error);
 }

 $stmt->bind_param("sss",
                    $_POST["email"],
                    $_POST["stuNum"],
                    $password_hash);

 
if($stmt->execute()){

  header("Location: signup-successful.php");
  exit;

}
else{
  if($conn->errno === 1062){
    $error[] = 'email already taken';
   
  }else{
    die($conn->error ." ". $conn->errno);
  }

}

?>