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
        <h3 class="fs-3">Update Email Address:</h3>
        <form class="col-6 justify-content-center gap-2" action="">
            <div class="d-flex justify-content-center align-items-center gap-2">
                <input type="text" class="form-control" value="<?php echo $emailAddress; ?>">
                <input class="btn btn-outline-success m-0" name="updateBtn" type="submit" value="Update">
            </div>
        </form>
        <button onclick="window.history.back()" class="btn btn-dark">Go Back</button>
    </div>
</section>

<?php

// Footer file 
include 'footer.php'

?>