<?php

include 'config.php';

$objDb = new DbConnect;
$conn = $objDb->connect();


$logoSqlQuery = "SELECT * FROM site_logo";

$stmt = $conn->prepare($logoSqlQuery);

if ($stmt->execute()) {
    $logoTblResult = $stmt->fetch();
    if($logoTblResult > 0) {
        $siteUrl = $logoTblResult['site_url'];
        $logoSrc = $logoTblResult['logo_src'];
    }
}

$navSqlQuery = "SELECT * FROM nav_tbl";

$stmt2 = $conn->prepare($navSqlQuery);

if ($stmt2->execute()) {
    $navTblResult = $stmt2->fetchAll();
}

$bannerSqlQuery = "SELECT * FROM banner_tbl";

$stmt3 = $conn->prepare($bannerSqlQuery);

if ($stmt3->execute()) {
    $bannerTblResult = $stmt3->fetch();
}

?>
