<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vilson | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container col-12 col-sm-8 col-md-6 col-lg-4 ">
  <h2 class="text-warning text-center">Vilson Login</h2>
  <form action="proces.php" method= "POST">
    <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control"  placeholder="Введіть логін" name="username">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control"  placeholder="Введіть пароль" name="password">
    </div>
    
    <button type="submit" class="btn btn-success">Підтвердити</button>
  </form>
</div>

</body>
</html>