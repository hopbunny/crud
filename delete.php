<?php

$conn = new mysqli("localhost", "root", "", "crud");
if($conn->connect_errno) {
    die("DATABASE NOT CONNECT!");
}

$studentID = $_GET["id"];
if($conn->query("DELETE FROM users WHERE id = '{$studentID}' ")) {
    header ("Location: table.php");
}

