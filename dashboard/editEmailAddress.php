<?php

// site tile
$siteTitle = "Admin Panel";

// Body file
include 'header.php';

// Admin Sql Query is in the following file
include 'adminSqlStmt.php';

$newEmailAddress = '';
$errorMsg = '';

if (isset($_POST['updateBtn'])) {

    if (empty($_POST['emailAddress'])) {
        
        $emailAddress = '';
        $errorMsg = '<span class="text-danger fs-6 fw-bold text-center">Email address field cannot be empty...!</span>';
    
    } else {
        
        $newEmailAddress = trim($_POST['emailAddress']);

        $sql = "UPDATE admin_tbl SET `user_email` = :emailAddress WHERE `user_id`= :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $userId);
        $stmt->bindParam(':emailAddress', $newEmailAddress);

        if ($stmt->execute()) {
            echo "<script>window.location.href = 'admin.php'</script>";
        }
    
    }
}

?>

<section>
    <div class="container d-flex flex-column justify-content-center align-items-center my-5 gap-4 px-5 py-3 rounded-3">
        <h3 class="fs-3">Update Email Address:</h3>
        <form method="POST" class="col-6 justify-content-center gap-2" action="">
            <div class="d-flex justify-content-center align-items-center gap-2">
                <input type="text" name="emailAddress" class="form-control" autocomplete="false" value="<?php echo $emailAddress; ?>">
                <input class="btn btn-outline-success m-0" name="updateBtn" type="submit" value="Update">
            </div>
        </form>
        <?php echo $errorMsg; ?>
        <button onclick="window.location.href = 'admin.php'" class="btn btn-dark">Go Back</button>
    </div>
</section>

<?php

// Footer file 
include 'footer.php'

?>