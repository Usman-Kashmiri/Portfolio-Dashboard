<?php

// site tile
$siteTitle = "Admin Panel";

// Body file
include 'header.php';

// Admin Sql Query is in the following file
include 'adminSqlStmt.php';

?>

<!-- Content -->

<h2>Welcome to Dashoard Mr. <?php echo $_SESSION['name']; ?></h2>

<section>
    <div class="container row d-flex flex-column align-items-center my-5 gap-4 px-5 py-3 rounded-3">
        <div class="card col-10 border shadow mb-4">
            <div class="card-header border-bottom pb-0">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                    <div>
                        <h6 class="font-weight-semibold fs-4 mb-0">Edit Admin's Profile</h6>
                    </div>
                    <div class="col-3 bg-gray-800 rounded-circle overflow-hidden">
                        <img class="img-fluid" src="<?php echo $dp; ?>" alt="Profile Picture">
                    </div>
                </div>
            </div>
            <div class="card-body px-0 py-0 bg-dark">
                <div class="row p-2 bg-gray-100">
                    <div class="col-3">
                        <span class="text-center text-secondary text-sm font-weight-semibold opacity-7">Label</span>
                    </div>
                    <div class="col-8">
                        <span class="text-center text-secondary text-sm font-weight-semibold opacity-7">Detail</span>
                    </div>
                    <div class="col-1">
                        <span class="text-center text-secondary text-sm font-weight-semibold opacity-7">Edit</span>
                    </div>
                </div>
                <div class="row p-2 bg-gray-900">
                    <div class="col-3">
                        <span class="text-center text-light font-weight-semibold">Username:</span>
                    </div>
                    <div class="col-8">
                        <span class="text-center text-light font-weight-semibold"><?php echo $username; ?></span>
                    </div>
                    <div class="col-1">
                        <a href="editUsername.php" class="text-center text-light font-weight-semibold"><i class="fs-4 fa fa-pen text-info"></i></a>
                    </div>
                </div>
                <div class="row p-2 bg-gray-800">
                    <div class="col-3">
                        <span class="text-center text-light font-weight-semibold">Email Address:</span>
                    </div>
                    <div class="col-8">
                        <span class="text-center text-light font-weight-semibold"><?php echo $emailAddress; ?></span>
                    </div>
                    <div class="col-1">
                        <a href="editEmailAddress.php" class="text-center text-light font-weight-semibold"><i class="fs-4 fa fa-pen text-info"></i></a>
                    </div>
                </div>
                <div class="row py-2 justify-content-between bg-gray-900">
                    <div class="col-5">
                       <a href="updateDp.php" class="btn btn-rounded btn-outline-success bg-gray-900 text-white m-0">Upadate Profile Picture</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                       <a href="resetPassword.php" class="btn btn-rounded btn-outline-success bg-gray-900 text-white m-0">Reset Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

// Footer file 
include 'footer.php'

?>