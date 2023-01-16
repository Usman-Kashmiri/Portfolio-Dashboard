<?php

// site tile
$siteTitle = "Admin Panel";

// Body file
include 'header.php';

// Admin Sql Query is in the following file
include 'adminSqlStmt.php';

?>

<section>
    <div class="container d-flex flex-column justify-content-center align-items-center my-5 gap-3 px-5 py-3 rounded-3">
        <h3 class="fs-3">Update Profile Picture:</h3>
        <form class="col-6 justify-content-center gap-2" action="">
            <div class="d-flex flex-column gap-3 align-items-center">
                <div id="updateDP" class="col-8 overflow-hidden"></div>
                <div class="d-flex gap-2 col-12">
                    <input type="file" accept="image/*" id="updateDpField" name="displayPicture" class="form-control" value="">
                    <input class="btn btn-outline-success m-0" name="updateBtn" type="submit" value="Update">
                </div>
            </div>
        </form>
        <button onclick="window.history.back()" class="btn btn-dark">Go Back</button>
    </div>
</section>

<?php

// Footer file 
include 'footer.php'

?>