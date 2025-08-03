<?php

$conn = mysqli_connect('172.16.0.5', 'root', '', 'employee_management');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>