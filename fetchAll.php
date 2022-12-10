<?php

// Set error reporting to zero to avoid errors on live site

// error_reporting(0);

// Database Connection

include 'config.php';

// Object of Db Class

$objDb = new DbConnect;
$conn = $objDb->connect();

// Logo queries

$logoSqlQuery = "SELECT * FROM site_logo";

$stmt = $conn->prepare($logoSqlQuery);

if ($stmt->execute()) {
    $logoTblResult = $stmt->fetch();
    if($logoTblResult > 0) {
        $siteUrl = $logoTblResult['site_url'];
        $logoSrc = $logoTblResult['logo_src'];
    }
}

// Navbar queries

$navSqlQuery = "SELECT * FROM nav_tbl";

$navStmt = $conn->prepare($navSqlQuery);

if ($navStmt->execute()) {
    $navTblResult = $navStmt->fetchAll();
}

// Navbar queries

$headingsSqlQuery = "SELECT * FROM section_headings_tbl";

$headingsStmt = $conn->prepare($headingsSqlQuery);

if ($headingsStmt->execute()) {
    $headingsTblResult = $headingsStmt->fetchAll();
    function myfunction($v)
    {
        return $v['section_heading'];
    }
    $headings = array_map("myfunction",$headingsTblResult);
}

// Banner section queries

$bannerSqlQuery = "SELECT * FROM banner_tbl";

$bannerStmt = $conn->prepare($bannerSqlQuery);

if ($bannerStmt->execute()) {
    $bannerTblResult = $bannerStmt->fetch();
}

// About Section queries

$aboutSecSqlQuery = "SELECT * FROM about_sec_tbl";

$aboutStmt = $conn->prepare($aboutSecSqlQuery);

if ($aboutStmt->execute()) {
    $aboutSecTblResult = $aboutStmt->fetch();
}

// services Section queries

$servicesSecSqlQuery = "SELECT * FROM services_sec_tbl";

$servicesStmt = $conn->prepare($servicesSecSqlQuery);

if ($servicesStmt->execute()) {
    $servicesSecTblResult = $servicesStmt->fetchAll();
}

// skill Section queries

$skillsSecSqlQuery = "SELECT * FROM skills_sec_tbl";

$skillsSecStmt = $conn->prepare($skillsSecSqlQuery);

if ($skillsSecStmt->execute()) {
    $skillsSecTblResult = $skillsSecStmt->fetch();
}

// skill queries

$skillsSqlQuery = "SELECT * FROM skills_tbl ORDER BY skill_level DESC";

$skillsStmt = $conn->prepare($skillsSqlQuery);

if ($skillsStmt->execute()) {
    $skillsTblResult = $skillsStmt->fetchAll();
}

// work section queries

$workSecSqlQuery = "SELECT * FROM work_sec_tbl";

$workStmt = $conn->prepare($workSecSqlQuery);

if ($workStmt->execute()) {
    $workTblResult = $workStmt->fetchAll();
}

// contact section queries

$contactSecSqlQuery = "SELECT * FROM contact_sec_tbl";

$contactSecStmt = $conn->prepare($contactSecSqlQuery);

if ($contactSecStmt->execute()) {
    $contactSecTblResult = $contactSecStmt->fetch();
}

// contact detail queries

$contactDetailsSqlQuery = "SELECT * FROM contact_detail_tbl";

$contactDetailsStmt = $conn->prepare($contactDetailsSqlQuery);

if ($contactDetailsStmt->execute()) {
    $contactDetailTblResult = $contactDetailsStmt->fetchAll();
}

// mail queries

$mailSqlQuery = "SELECT * FROM  mail_tbl";

$mailStmt = $conn->prepare($mailSqlQuery);

if ($mailStmt->execute()) {
    $mailTblResult = $mailStmt->fetch();
}

// footer section queries

$footerSqlQuery = "SELECT * FROM footer_tbl";

$footerStmt = $conn->prepare($footerSqlQuery);

if ($footerStmt->execute()) {
    $footerTblResult = $footerStmt->fetch();
}
