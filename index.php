<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('localhost: login.php');

    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="header">
        <h2>homepage</h2>
    </div>

    <div class="content">
        <?php if (isset ($_SESSION ['username'])) : ?>
            <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>
</body>
    
</html>
