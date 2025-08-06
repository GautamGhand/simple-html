<?php

$conn = mysqli_connect('172.17.2.4', 'root', 'StrongPassword123!', 'employee_management');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>