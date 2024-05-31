<?php

@include('dbconnect.php');

$sql = sprintf("SELECT * FROM student
                WHERE email = '%s'",
                $conn->real_escape_string($_GET["email"]));
                
$result = $conn->query($sql);

$is_available = $result->num_rows === 0;

header("Content-Type: application/json");

echo json_encode(["available" => $is_available]);

?>