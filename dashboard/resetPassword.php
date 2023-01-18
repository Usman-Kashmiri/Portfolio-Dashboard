<?php

// site tile
$siteTitle = "Admin Panel";

// Body file
include 'header.php';

// Admin Sql Query is in the following file
include 'adminSqlStmt.php';

$oldPassword = '';
$newPassword = '';
$newPassword_REGEX = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{8,20}$/';
$confirmPassword = '';
$oldPasswordErrorMsg = '';
$newPasswordErrorMsg = '';
$confirmPasswordErrorMsg = '';

if (isset($_POST["updateBtn"])) {

    if (empty($_POST["old_password"])) {

        $oldPasswordErrorMsg = '<span class="text-danger fs-6 fw-bold text-center">Please enter your old password to verify it is you...!</span>';
    
    }
    else if (sha1($_POST['old_password']) != $password) {

        $oldPasswordErrorMsg = '<span class="text-danger fs-6 fw-bold text-center">Password mismatched, Incorrect old password...!</span>';

    } else if (empty($_POST['new_password'])) {

        $newPasswordErrorMsg = '<span class="text-danger fs-6 fw-bold text-center">Please enter a new password...!</span>';

    } else if (!preg_match($newPassword_REGEX, $_POST['new_password'])) {

        $newPasswordErrorMsg = '<span class="text-danger fs-6 fw-bold text-center">Password should be 8 characters long, must include alphabets and at least 1 number...!</span>';

    } else if (empty($_POST['confirm_password'])) {

        $confirmPasswordErrorMsg = '<span class="text-danger fs-6 fw-bold text-center">Please verify your new password...!</span>';

    } else if ($_POST['old_password'] == $_POST['new_password']) {

        $newPasswordErrorMsg = '<span class="text-danger fs-6 fw-bold text-center">New password cannot be same as the old password...!</span>';

    } else if ($_POST['new_password'] != $_POST['confirm_password']) {

        $confirmPasswordErrorMsg = '<span class="text-danger fs-6 fw-bold text-center">Password mismatched...!</span>';

    } else {

        $newPassword = sha1($_POST['new_password']);

        $sql = "UPDATE admin_tbl SET `user_password` = :new_password WHERE `user_id`= :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $userId);
        $stmt->bindParam(':new_password', $newPassword);

        if ($stmt->execute()) {
            echo "<script>window.location.href = 'admin.php'</script>";
        }

    }
}


?>

<section>
    <div class="container-md container-fluid d-flex flex-column justify-content-center align-items-center mt-4 gap-4 px-md-5 px-2 py-3 rounded-3">
        <h3 class="fs-3">Reset Password:</h3>
        <form name="resetPasswordForm" method="post" class="col-lg-6 col-md-8 col-12 justify-content-center gap-2" action="">
            <div class="form-group">
                <label for="old_password_field" class="form-control-label">Old Password:</label>
                <div class="d-flex justify-content-end mb-2">
                    <input type="password" id="old_password_field" name="old_password" class="password-field form-control" placeholder="Enter Your Old Password">
                    <span onclick="showPassword('#old_password_field', '#show_old_password')" class="show-password-icon position-absolute mt-2 me-2 cursor-pointer"><i id="show_old_password" class="fs-5 fa fa-eye"></i></span>
                </div>
                <?php echo $oldPasswordErrorMsg; ?>
            </div>
            <div class="form-group">
                <label for="new_password" class="form-control-label">New Password:</label>
                <div class="d-flex justify-content-end mb-2">
                    <input type="password" id="new_password" name="new_password" class="password-field form-control" placeholder="Enter New Password">
                    <span onclick="showPassword('#new_password', '#show_new_password')" class="show-password-icon position-absolute mt-2 me-2 cursor-pointer"><i id="show_new_password" class="fs-5 fa fa-eye"></i></span>
                </div>
                <?php echo $newPasswordErrorMsg; ?>
            </div>
            <div class="form-group">
                <label for="confirm_password" class="form-control-label">Old Password:</label>
                <div class="d-flex justify-content-end mb-2">
                    <input type="password" id="confirm_password" name="confirm_password" class="password-field form-control" placeholder="Confirm New Password">
                    <span onclick="showPassword('#confirm_password', '#show_confirm_password')" class="show-password-icon position-absolute mt-2 me-2 cursor-pointer"><i id="show_confirm_password" class="fs-5 fa fa-eye"></i></span>
                </div>
                <?php echo $confirmPasswordErrorMsg; ?>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <input class="btn btn-outline-success" name="updateBtn" type="submit" value="Reset Password">
            </div>
        </form>
        <button onclick="window.location.href = 'admin.php'" class="btn btn-dark">Go Back</button>
    </div>
</section>

<?php

// Footer file 
include 'footer.php'

?>