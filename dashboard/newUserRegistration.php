

<?php

// DB Connection file

include "config.php";

$objDb = new DbConnect;
$conn = $objDb->connect();

// User Variable

$userId = uniqid();
$userName = 'Usman Kashmiri';
$userPassword = sha1('kashmiri378');
$userEmail = 'usmankashmiri@kashmiri.dev';

// Query

$sqlQuery = "INSERT INTO `user_tbl`(`user_id`, `user_name`, `user_email`, `user_password`) VALUES (:id, :username, :email, :pass)";

$stmt = $conn->prepare($sqlQuery);
$stmt->bindParam(':id', $userId);
$stmt->bindParam(':username', $userName);
$stmt->bindParam(':email', $userEmail);
$stmt->bindParam(':pass', $userPassword);

if($stmt->execute()) {
    echo 'Record inserted successfully.';
} else {
    echo 'Failed to insert record.';
}

?>

<!-- <h1>Henlo World</h1> -->