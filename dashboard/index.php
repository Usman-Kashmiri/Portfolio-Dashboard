<?php

session_start();

// fetchAll db file

include '../fetchAll.php';

$loginError = "";
$recaptchaErr = "";

if (isset($_POST['loginBtn'])) {
  if (isset($_POST['g-recaptcha-response'])) {
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
        if ($row > 0) {
          $_SESSION['name'] = $row['user_name'];
          $_SESSION['email'] = $row['user_email'];
          header("location: admin.php");
        } else {
          $loginError = '<div class="alert bg-gradient-danger alert-dismissible text-sm  text-white  fade show mt-3" role="alert">
          <span class="alert-icon"><i class="fa fa-triangle-exclamation"></i></span>
          <span class="alert-text">Incorret email address or password!</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
      }
    } else {
      $recaptchaErr = '<div class="alert bg-gradient-danger alert-dismissible text-sm  text-white  fade show mt-3" role="alert">
      <span class="alert-icon"><i class="fa fa-triangle-exclamation"></i></span>
      <span class="alert-text">Invalid Recaptcha...!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>';
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

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../corporate ui design kit/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../corporate ui design kit/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link href="../corporate ui design kit/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../corporate ui design kit/css/corporate-ui-dashboard.min.css?v=1.0.0" rel="stylesheet" />
</head>

<body>



  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form method='POST' class="d-flex flex-column align-items-center">

        <!-- Email input field -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Email Address:</label>
              <input type="email" id="login" class="fadeIn second form-control" autocomplete="off" name="email" placeholder="Email">
            </div>
          </div>
        </div>

        <!-- Password input field -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="" class="mt-3">Password:</label>
              <input type="password" id="password" class="fadeIn third form-control" name="password" placeholder="Password">
            </div>
          </div>
        </div>

        <!-- Incorrect email/password error -->
        <?php echo $loginError; ?>

        <div class="my-2">
          <div class="g-recaptcha" data-sitekey="6LeMBBsjAAAAAJbKI8YEA2ETvxN2z-9FycPeayRC"></div>
        </div>

        <!-- Invalid recaptcha error-->
        <?php echo $recaptchaErr; ?>

        <!-- Form submit button -->
        <input type="submit" name='loginBtn' class="fadeIn fourth" value="Log In">

      </form>
    </div>
  </div>

  <!-- JS Files -->
  <script src='https://www.google.com/recaptcha/api.js'></script> <!-- google recaptcha -->
  <script src="../assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--   Core JS Files   -->
  <script src="../corporate ui design kit/js/core/popper.min.js"></script>
  <script src="../corporate ui design kit/js/core/bootstrap.min.js"></script>
  <script src="../corporate ui design kit/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../corporate ui design kit/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../corporate ui design kit/js/plugins/chartjs.min.js"></script>
  <script src="../corporate ui design kit/js/plugins/swiper-bundle.min.js" type="text/javascript"></script>

  <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->

  <script src="../corporate ui design kit/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>

</body>

</html>