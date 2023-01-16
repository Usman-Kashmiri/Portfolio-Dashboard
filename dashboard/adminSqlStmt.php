<?php

$adminSqlQuery = "SELECT * FROM admin_tbl";

$adminStmt = $conn->prepare($adminSqlQuery);

if ($adminStmt->execute()) {
    $adminTblResult = $adminStmt->fetch();
}

$userId = $adminTblResult[0];
$username = $adminTblResult[1];
$emailAddress = $adminTblResult[2];
$password = $adminTblResult[3];
$dp = $adminTblResult[5];

?>