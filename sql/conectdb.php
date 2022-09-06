<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;

$sql = "INSERT INTO users (name, email, phone) VALUES ('{$name}', '{$email}', '{$phone}')";

if ($conn->query($sql) === TRUE) {
    header ("Location: ../table.php"); 
  } else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}

$conn->close();
