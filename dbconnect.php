<?php
$conn = new mysqli("localhost", "root", "", "smc");
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
?>