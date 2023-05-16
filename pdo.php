<?php
$conn=mysqli_connect("localhost","root","","contact");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die("Error: Failed to connect to database");
}
?>