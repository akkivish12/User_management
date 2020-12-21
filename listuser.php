<?php
$mysqli = new mysqli("localhost","root","","user_management");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

  $query="SELECT * FROM `user`";
  $run=mysqli_query($mysqli,$query);
  
  


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
	<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>DOB</th>
        <th>City</th>
        <th>Mobile No</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($result=mysqli_fetch_assoc($run)) { ?>
        
      <tr class="info">
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['fname']; ?></td>
        <td><?php echo $result['lname']; ?></td>
        <td><?php echo $result['dob']; ?></td>
        <td><?php echo $result['city']; ?></td>
        <td><?php echo $result['mobile']; ?></td>
        <td><a href="edituser.php?id=<?php echo $result['id']; ?>" class="btn btn-primary" >Edit</a></td>
        <td><a href="delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger" >Delete</a></td>
      </tr>
     
     <?php } ?>
    </tbody>
  </table>

  
</div>

</body>
</html>
