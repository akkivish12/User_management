<?php 
$mysqli = new mysqli("localhost","root","","user_management");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

  
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query="DELETE FROM `user` WHERE id='$id'";
    $run=mysqli_query($mysqli,$query);
    header("Location: listuser.php");
 


}



?>