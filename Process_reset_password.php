<?php

$token = $_POST["token"];

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

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["cpassword"]) {
    die("Passwords must match");
}

$password_hash = $_POST["password"];

        $update = "UPDATE `student` SET `password_hash`= ?,`reset_token_hash`=  NULL,`reset_token_expires_at`= NULL WHERE id = ?";

$stmt = $conn->prepare($update);

$stmt->bind_param("ss", $password_hash, $user["id"]);

$stmt->execute();

header("Location: Registeration.php");