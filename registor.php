<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration System</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>

  <form action="register_db.php">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="username">
        </div>
        <div class="input-group">
            <label for="password">password</label>
            <input type="password" name="password">
        </div>   
         <div class="input-group">
            <label for="password_2">password_2</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <input type="submit" name="reg_user" class="btn">Registor</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
    
</body>
</html>
