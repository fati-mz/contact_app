<?php

include_once 'database.php';

if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $company= $_POST['company'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO users (first_name,last_name,company,email)
	 VALUES ('$first_name','$last_name','$company','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        header("location:index.php");
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>