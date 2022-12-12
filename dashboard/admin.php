<?php

session_start();

include '../fetchAll.php';

if (!isset($_SESSION['name'])) {
    header("location: index.php");
}

// admin queries

$adminSqlQuery = "SELECT * FROM admin_tbl";

$adminStmt = $conn->prepare($adminSqlQuery);

if ($adminStmt->execute()) {
    $adminTblResult = $adminStmt->fetch();
}

include 'header.php';

?>

<!-- Site title -->
<title><?php echo $seoTblResult[1]; ?> - Admin Panel</title>

</head>

<body class="g-sidenav-show bg-gray-100">

    <?php include 'aside.php' ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php include 'navbar.php' ?>

        <div class="container">
            <h2>Welcome to Dashoard Mr. <?php echo $_SESSION['name']; ?></h2>
        </div>
    </main>

    <!-- <a href="logout.php"><button>Logout</button></a> -->

    <?php include 'footer.php' ?>
</body>

</html>