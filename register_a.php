<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else(isset($_POST['save']))
{
    // $file = rand(1000,100000)."-".$_FILES['file']['name'];
    // $file_loc = $_FILES['file']['tmp_name'];
    // $folder="upload/";
    // $new_file_name = strtolower($file);
    // $final_file=str_replace(' ','-',$new_file_name);
    // if(move_uploaded_file($file_loc,$folder.$final_file))
    // {
    //     $query="INSERT INTO register(First_Name, Last_Name, Email, Password, File ) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)', '$final_file')";
    //     $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    //     header ("Location: login.php?status=success");
    // }
    // else 
    // {
	// 	echo "Error.Please try again";
	// }

     $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $pass= $_POST['pass'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO users (First_Name, Last_Name, Email, Password)
	 VALUES ('$first_name', '$last_name', '$email', 'md5($pass)')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        header("location:index.php");
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>