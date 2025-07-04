<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>

  <form action="login_db.php" method="post">
     <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success'])
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password">password</label>
            <input type="password" name="password">
        </div>   
        <div class="input-group">
            <input type="submit" name="login_user" class="btn">Register</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign Up</a></p>
    </form>
    
</body>