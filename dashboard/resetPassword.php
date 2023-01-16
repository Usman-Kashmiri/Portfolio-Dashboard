<?php

// site tile
$siteTitle = "Admin Panel";

// Body file
include 'header.php';

// Admin Sql Query is in the following file
include 'adminSqlStmt.php';

?>

<section>
    <div class="container d-flex flex-column justify-content-center align-items-center mt-4 gap-4 px-5 py-3 rounded-3">
        <h3 class="fs-3">Reset Password:</h3>
        <form class="col-6 justify-content-center gap-2" action="">
            <div class="form-group">
                <label for="old_password" class="form-control-label">Old Password:</label>
                <input type="password" id="old_password" name="old_password" class="form-control" value="" placeholder="Enter Your Old Password">
            </div>
            <div class="form-group">
                <label for="new_password" class="form-control-label">New Password:</label>
                <input type="password" id="new_password" name="new_password" class="form-control" value="" placeholder="Enter New Password">
            </div>
            <div class="form-group">
                <label for="confirm_password" class="form-control-label">Old Password:</label>
                <input type="password" id="confirm_password" name="confim_password" class="form-control" value="" placeholder="Confirm New Password">
            </div>
            <div class="d-flex justify-content-end mt-4">
                <input class="btn btn-outline-success" name="updateBtn" type="submit" value="Reset Password">
            </div>
        </form>
        <button onclick="window.history.back()" class="btn btn-dark">Go Back</button>
    </div>
</section>

<?php

// Footer file 
include 'footer.php'

?>