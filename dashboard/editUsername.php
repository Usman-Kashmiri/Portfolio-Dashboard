<?php

// site tile
$siteTitle = "Admin Panel";

// Body file
include 'header.php';

// Admin Sql Query is in the following file
include 'adminSqlStmt.php';

?>

<section>
    <div class="container d-flex flex-column justify-content-center align-items-center my-5 gap-4 px-5 py-3 rounded-3">
        <h3 class="fs-3">Update Username:</h3>
        <form method="POST" class="col-6 justify-content-center gap-2" action="">
            <div class="d-flex justify-content-center align-items-center gap-2">
                <input type="text" name="username" autocomplete="false" class="form-control" value="<?php echo $username; ?>">
                <input class="btn btn-outline-success m-0" name="updateBtn" type="submit" value="Update">
            </div>
        </form>
        <button onclick="window.history.back()" class="btn btn-dark">Go Back</button>
    </div>
</section>

<?php

if (isset($_POST['updateBtn'])) {
    $newUsername = $_POST['username'];

    $sql = "UPDATE admin_tbl SET `user_name` = :userName WHERE `user_id`= :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $userId);
    $stmt->bindParam(':userName', $newUsername);

    if($stmt->execute()) {
        echo "<script>window.location.href = 'admin.php'</script>";
    }
}

// Footer file 
include 'footer.php'

?>