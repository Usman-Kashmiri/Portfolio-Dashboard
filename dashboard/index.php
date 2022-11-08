<?php

// DB Connection file

include "config.php";

$objDb = new DbConnect;
$conn = $objDb->connect();

if (isset($_POST['loginBtn'])) {
    $userEmail = $_POST['email'];
    $userPassword = sha1($_POST['password']);

    $sqlQuery = "SELECT user_email, user_password FROM user_tbl WHERE user_email = :email && user_password = :pass";

    $stmt = $conn->prepare($sqlQuery);
    $stmt->bindParam(':email', $userEmail);
    $stmt->bindParam(':pass', $userPassword);

        if ($stmt->execute()) {
            $row = $stmt->fetch();
            if($row > 0) {
                header("location: admin.php");
            } else {
                echo 'User Not FOUND - 404';
            }
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kashmiri.Dev - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method='POST'>
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" name='loginBtn' class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>

    <!-- JS Files -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>