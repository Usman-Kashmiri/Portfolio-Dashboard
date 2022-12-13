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

?>