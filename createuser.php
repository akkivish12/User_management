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
      <input type="text" class="form-control"  placeholder="Enter your First Name" name="fname">
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your Last Name" name="lname">
    </div>
    <div class="form-group">
      <label for="dob">DOB:</label>
      <input type="date" class="form-control" name="dob">
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control"  placeholder="Enter your City" name="city">
    </div>
    <div class="form-group">
      <label for="phoneno">Mobile NO:</label>
      <input type="text" class="form-control"  placeholder="Enter your Mobile NO" name="mobile">
    </div>
    
    
    <button type="submit" name="submit"  class="btn btn-success">Submit</button>
  </form>

  
</div>

</body>
</html>
