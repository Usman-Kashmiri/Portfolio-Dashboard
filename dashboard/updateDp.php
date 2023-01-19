<?php

// site tile
$siteTitle = "Admin Panel";

// Body file
include 'header.php';

// Admin Sql Query is in the following file
include 'adminSqlStmt.php';

$uploadingErrormsg = '';

if (isset($_POST['updateBtn'])) {

    if ($_FILES['displayPicture']['size'] <= 0) {

        $uploadingErrormsg = '<span class="text-danger fs-6 fw-bold text-center">No profile picture is selected...!</span>';
    } else if (($_FILES['displayPicture']['type'] != "image/jpeg") && ($_FILES['displayPicture']['type'] != "image/jpg") && ($_FILES['displayPicture']['type'] != "image/gif") && ($_FILES['displayPicture']['type'] != "image/png") && ($_FILES['displayPicture']['type'] != "image/web") && ($_FILES['displayPicture']['type'] != "image/svg")) {

        $uploadingErrormsg = '<span class="text-danger fs-6 fw-bold text-center">Please select a valid file formate. <br/>i.e: JPEG, jpg, png, gif, svg or webp...!</span>';
    } else if ($_FILES['displayPicture']['size'] > 3145728) {

        $fileSize = ($_FILES['displayPicture']['size'] * 0.000001) . ' MBs';
        $uploadingErrormsg = "<span class='text-danger fs-6 fw-bold text-center'>The file size limit for profile picture is 3 MBs. <br /> Your selected file size is $fileSize</span>";
    } else {

        $file = $_FILES['displayPicture'];
        $file_name = $_FILES['displayPicture']['name'];
        $file_tmpName = $_FILES['displayPicture']['tmp_name'];
        $splitedFileName = explode('.', $file_name);
        $fileExtension = strtolower(end($splitedFileName));
        $newFile = uniqid() . '.' . $fileExtension;
        $imagePath = 'assets/imgs/' . $newFile;
        $select = "SELECT `user_dp_name`, `user_dp_path` FROM admin_tbl WHERE `user_id` = :id";
        $result = $conn->prepare($select);
        $result->bindParam(':id', $userId);
        if ($result->execute()) {
            $row = $result->fetch();
            $oldImage = $row["user_dp_name"];
            $oldImagePath = 'assets/imgs/' . $oldImage;
            if ($imagePath !== $oldImage) {
                move_uploaded_file($file_tmpName, 'assets/imgs/' . $newFile);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }

        $sql = "UPDATE admin_tbl SET user_dp_name = :imagename, user_dp_path = :imagepath WHERE `user_id` = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $userId);
        $stmt->bindParam(':imagename', $newFile);
        $stmt->bindParam(':imagepath', $imagePath);

        if ($stmt->execute()) {
            echo "<script>window.location.href = 'admin.php'</script>";
        }
    }
}

?>

<section>
    <div class="container d-flex flex-column justify-content-center align-items-center my-5 gap-3 px-lg-5 px-2 py-3 rounded-3">
        <h3 class="fs-3">Update Profile Picture:</h3>
        <form class="col-lg-6 col-md-8 col-12 justify-content-center gap-2" method="post" enctype="multipart/form-data" action="">
            <div class="d-flex flex-column gap-3 align-items-center">
                <div id="updateDP" class="col-lg-8 col-md-6 col-10 overflow-hidden"></div>
                <div class="d-flex gap-2 col-12">
                    <input type="file" accept="image/*" id="updateDpField" name="displayPicture" class="form-control">
                    <input class="btn btn-outline-success m-0" name="updateBtn" type="submit" value="Update">
                </div>
                <?php echo $uploadingErrormsg; ?>
            </div>
        </form>
        <button onclick="window.history.back()" class="btn btn-dark">Go Back</button>
    </div>
</section>

<?php

// Footer file 
include 'footer.php'

?>