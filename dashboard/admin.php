<?php

session_start();

include '../fetchAll.php';

if (!isset( $_SESSION['name'])) {
    header("location: index.php");
}

// admin queries

$adminSqlQuery = "SELECT * FROM admin_tbl";

$adminStmt = $conn->prepare($adminSqlQuery);

if ($adminStmt->execute()) {
  $adminTblResult = $adminStmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $logoTblResult[1]; ?>" type="image/x-icon">

    <!-- Site title -->
    <title><?php echo $seoTblResult[1]; ?> - Admin Panel</title>

</head>
<body>
    <img src="<?php echo $adminTblResult[5] ?>" width="200px" alt="">
    <h2>Welcome to Dashoard Mr. <?php echo $_SESSION['name']; ?></h2>

    <a href="logout.php"><button>Logout</button></a>
</body>
</html>