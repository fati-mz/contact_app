<?php
session_start();

include_once 'pdo.php';

if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $company= $_POST['company'];
	 $email = $_POST['email'];
	 $contact_id=$_SESSION["id"];
	 $sql = "INSERT INTO users (first_name,last_name,company,email,contact_id)
	 VALUES ('$first_name','$last_name','$company','$email','$contact_id')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        header("location:index.php");
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>