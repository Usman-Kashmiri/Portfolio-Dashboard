<?php

session_start();

// fetchAll db file

include '../fetchAll.php';

$loginError = "";
$recaptchaErr = "";

if (isset($_POST['loginBtn'])) {
  if(isset($_POST['g-recaptcha-response'])) {
    $secretKey = "6LeMBBsjAAAAAJ8XrvIwHuqf02rOcQY21KLvCd1F";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $response = json_decode($response);
    $userEmail = $_POST['email'];
    $userPassword = sha1($_POST['password']);

    if ($response->success) {
      $sqlQuery = "SELECT * FROM admin_tbl WHERE user_email = :email && user_password = :pass";

      $stmt = $conn->prepare($sqlQuery);
      $stmt->bindParam(':email', $userEmail);
      $stmt->bindParam(':pass', $userPassword);

        if ($stmt->execute()) {
            $row = $stmt->fetch();
            if($row > 0) {
                $_SESSION['name'] = $row['user_name'];
                $_SESSION['email'] = $row['user_email'];
                header("location: admin.php");
            } else {
              $loginError = "<span>Incorret email address or password!</span>";
            }
        }
      } else {
        $recaptchaErr = "<div class='alert alert-danger'>Invalid Recaptcha...!</div>";
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

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $logoTblResult[1]; ?>" type="image/x-icon">

    <!-- Site title -->
    <title><?php echo $seoTblResult[1]; ?> - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    


<div class="wrapper  fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method='POST' class="d-flex flex-column align-items-center">
      <label for="">Email Address:</label>
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
      <label for="" class="mt-3">Password:</label>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <div class="my-3">
        <div class="g-recaptcha" data-sitekey="6LeMBBsjAAAAAJbKI8YEA2ETvxN2z-9FycPeayRC"></div>
      </div>
      <?php echo $recaptchaErr; ?>
      <input type="submit" name='loginBtn' class="fadeIn fourth" value="Log In">
    </form>
    <?php echo $loginError; ?>
  </div>
</div>

    <!-- JS Files -->
    <script src='https://www.google.com/recaptcha/api.js'></script> <!-- google recaptcha -->
    <script src="../assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>