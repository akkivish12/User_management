<?php
$mysqli = new mysqli("localhost","root","","user_management");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query="SELECT * FROM `user` WHERE id='$id'";
  $run=mysqli_query($mysqli,$query);
  $result=mysqli_fetch_assoc($run);
}
  
  
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Test</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="createuser.php">Create User</a></li>
      <li><a href="listuser.php">List User</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <form action="action.php" method="POST">
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your First Name" name="fname" value="<?php echo $result['fname']; ?>">
    </div>
    <div class="form-group">
      <label for="lname">Lastname Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your Last Name" name="lname" value="<?php echo $result['lname']; ?>">
    </div>
    <div class="form-group">
      <label for="dob">DOB:</label>
      <input type="date" class="form-control" name="dob" value="<?php echo $result['dob']; ?>">
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control"  placeholder="Enter your City" name="city" value="<?php echo $result['city']; ?>">
    </div>
    <div class="form-group">
      <label for="phoneno">Mobile NO:</label>
      <input type="text" class="form-control"  placeholder="Enter your Mobile NO" name="mobile" value="<?php echo $result['mobile']; ?>">
      <input type="hidden" class="form-control"   name="id" value="<?php echo $result['id']; ?>">
    </div>
    
    
    <button type="submit" name="submit_update"  class="btn btn-success">Update</button>
  </form>

  
</div>

</body>
</html>
