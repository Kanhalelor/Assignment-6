<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN</title>
</head>
<body>
<h1></h1>
  <form action="login.php" method="POSt">
    <h2 class="form-header">
      LOGIN
    </h2>
    <?php if (isset($_GET['error'])) { ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<label>User Name</label>
<input type="text" name="uname" placeholder="User Name"><br>
<label>Password</label>
<input type="password" name="password" placeholder="Password"><br> 
<button type="submit">Login</button>
  </form>
</body>
</html>