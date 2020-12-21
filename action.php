<?php 
$mysqli = new mysqli("localhost","root","","user_management");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


 if(isset($_POST['submit'])){
 	$fname=$_POST['fname'];
 	$lname=$_POST['lname'];
 	$dob=$_POST['dob'];
 	$city=$_POST['city'];
 	$mobile=$_POST['mobile'];



 	$query="INSERT INTO `user`(`fname`, `lname`, `dob`, `city`, `mobile`) VALUES ('$fname','$lname','$dob','$city','$mobile')";
 	$run=mysqli_query($mysqli,$query);
 	if($run){
 		echo "INSERTED";
 		header("Location: listuser.php");
 	}else{
 		echo "NOT INSERTED";

 	}




 }

if(isset($_POST['submit_update'])){
	$id=$_POST['id'];
 	$fname=$_POST['fname'];
 	$lname=$_POST['lname'];
 	$dob=$_POST['dob'];
 	$city=$_POST['city'];
 	$mobile=$_POST['mobile'];



 	$query="UPDATE `user` SET `fname`='$fname',`lname`='$lname',`dob`='$dob',`city`='$city',`mobile`='$mobile' WHERE id='$id'";
 	$run=mysqli_query($mysqli,$query);
 	if($run){
 		echo "INSERTED";
 		header("Location: listuser.php");
 	}else{
 		echo "NOT INSERTED";
 		
 	}




 }

?>