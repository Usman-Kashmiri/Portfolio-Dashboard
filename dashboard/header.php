<?php

// Session start file
include 'session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $logoTblResult[1]; ?>" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="../corporate ui design kit/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../corporate ui design kit/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- CSS Files -->
    <link id="pagestyle" href="../corporate ui design kit/css/corporate-ui-dashboard.min.css?v=1.0.0" rel="stylesheet" />


    <!-- Site title -->
    <title><?php echo $seoTblResult[1] . " - " . $siteTitle; ?></title>

</head>

<body class="g-sidenav-show bg-gray-100">

    <?php include 'aside.php' ?>

    <!-- main -->

    <main class="main-content position-relative min-vh-100 border-radius-lg">

        <!-- Navbar -->
        <?php include 'navbar.php' ?>

        <div class="container">