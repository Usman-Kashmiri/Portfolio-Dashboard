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
    <div class="container-md container-fluid m-0 row d-flex flex-column align-items-center my-5 gap-4 px-lg-5 px-md-3 px-0 py-3 rounded-3">
        <div class="card col-lg-10 col-12 border shadow mb-4">
            <div class="card-header border-bottom pb-0">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                    <div>
                        <h6 class="font-weight-semibold fs-4 mb-0">Edit Admin's Profile</h6>
                    </div>
                    <div class="col-md-3 col-5 mt-md-0 mt-1 bg-gray-800 rounded-circle overflow-hidden">
                        <img class="img-fluid" src="<?php echo $dp; ?>" alt="Profile Picture">
                    </div>
                </div>
            </div>
            <div class="card-body px-0 py-0 bg-dark">
                <div class="row p-2 bg-gray-100">
                    <div class="col-md-3 col-4">
                        <span class="text-center text-secondary text-sm font-weight-semibold opacity-7">Label</span>
                    </div>
                    <div class="col-md-8 col-6">
                        <span class="text-center text-secondary text-sm font-weight-semibold opacity-7">Detail</span>
                    </div>
                    <div class="col-md-1 col-2">
                        <span class="text-center text-secondary text-sm font-weight-semibold opacity-7">Edit</span>
                    </div>
                </div>
                <div class="row p-2 bg-gray-900">
                    <div class="col-md-3 col-4 px-md-2 px-0">
                        <span class="text-center text-light fs-6">Username:</span>
                    </div>
                    <div class="col-md-8 col-6">
                        <span class="text-center text-light"><?php echo $username; ?></span>
                    </div>
                    <div class="col-md-1 col-2 px-2 d-flex justify-content-end">
                        <a href="editUsername.php" class="text-center text-light"><i class="fs-4 fa fa-pen text-info"></i></a>
                    </div>
                </div>
                <div class="row p-2 bg-gray-800">
                    <div class="col-md-3 col-4 px-md-2 px-0">
                        <span class="text-center text-light">Email Address:</span>
                    </div>
                    <div class="col-md-8 col-6">
                        <span class="text-center text-light"><?php echo $emailAddress; ?></span>
                    </div>
                    <div class="col-md-1 col-2 px-2 d-flex justify-content-end">
                        <a href="editEmailAddress.php" class="text-center text-light"><i class="fs-4 fa fa-pen text-info"></i></a>
                    </div>
                </div>
                <div class="row py-2 justify-content-md-between justify-content-center align-items-center bg-gray-900">
                    <div class="col-md-4 col-10 px-lg-3 p-2 d-flex justify-content-center">
                       <a href="updateDp.php" class="btn btn-rounded w-100 text-sm btn-outline-success bg-gray-900 text-white m-0 p-2">Upadate Profile Picture</a>
                    </div>
                    <div class="col-md-4 col-10 d-flex justify-content-md-end align-items-center px-lg-3 p-2">
                       <a href="resetPassword.php" class="btn btn-rounded w-100 text-sm btn-outline-success bg-gray-900 text-white m-0 p-2">Reset Password</a>
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