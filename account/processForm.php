<?php
require __DIR__ . '/../parts/config.php';

$msg = "";
$msg_class = "";

if (isset($_POST['save_profile'])) {
    // for the database
    // 我要淳取的位置
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if ($_FILES['profileImage']['size'] > 200000) {
        $msg = "Image size should not be greated than 200Kb";
        $msg_class = "alert-danger";
    }
    // check if file exists
    if (file_exists($target_file)) {
        $msg = "File already exists";
        $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO member_avatar SET profile_image='$profileImageName' WHERE sid=1";
            $pdo->exec($sql);
            // if ($pdo->exec($sql)) {
            //     $msg = "Image uploaded and saved in the Database";
            //     $msg_class = "alert-success";
            // } else {
            //     $msg = "There was an error in the database";
            //     $msg_class = "alert-danger";
            // }
        } else {
            $error = "There was an erro uploading the file";
            $msg = "alert-danger";
        }
    }
}
