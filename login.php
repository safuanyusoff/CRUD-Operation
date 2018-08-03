<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/bootstrap.min.css">
  <link rel="stylesheet" href="asset/center.css">
  <script src="asset/jquery.min.js"></script>
  <script src="asset/popper.min.js"></script>
  <script src="asset/bootstrap.min.js"></script>
</head>
<body>

  <div class="container lowered">
    <h2>Login Form</h2>
    <form action="login_verify.php" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
      <div class="form-group form-check">

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>
</html>
