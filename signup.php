<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <div class="container">
        <h1 class="text-center">Signup to our website</h1>
<form action="/Registration System/signup.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <div class="form-group">
    <label for="cpassword1">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name ="cpassword">
    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
  </div>
  <div class="form-group">
    <label for="PhoneNumber">Phone Number</label>
    <input type="PhoneNumber" class="form-control" id="PhoneNumber" name="PhoneNumber">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="gender" class="form-control" id="gender" name="gender">
  </div>
  <div class="form-group">
    <label for="region">Country</label>
    <input type="region" class="form-control" id="region" name="region">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="address" class="form-control" id="address" name="address">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Signup</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>