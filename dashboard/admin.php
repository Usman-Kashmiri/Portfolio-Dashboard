<?php

session_start();

if (!isset( $_SESSION['name'])) {
    header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kashmiri.Dev - Admin Panel</title>
</head>
<body>
    <h2>Welcome to Dashoard Mr. <?php echo $_SESSION['name']; ?></h2>

    <a href="logout.php"><button>Logout</button></a>
</body>
</html>