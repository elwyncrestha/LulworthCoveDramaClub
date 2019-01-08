<?php 
require_once 'connection.php'; 

// beside admin controller it is also a root controller

// admin home dashboard summary table
function summaryTable()
{
    $summary = array(
        "Total subscriptions"=>countRows("subscription_tbl",""),
        "Total messages received"=>countRows("contact_tbl",""),
        "No. of user types"=>countRows("usertype_tbl",""),
        "Total users (includes admin)"=>countRows("user_tbl",""),
        "No. of Admins"=>countRows("user_tbl u, usertype_tbl ut"," where u.userTypeId=ut.userTypeId and ut.userTypeName='ADMIN'"),
        "No. of Students"=>countRows("user_tbl u, usertype_tbl ut"," where u.userTypeId=ut.userTypeId and ut.userTypeName='USER'"),
        "No. of Teachers"=>countRows("teacher_tbl",""),
        "Total Classes"=>countRows("class_tbl",""),
        "Total Events"=>countRows("event_tbl","")
    );
    return $summary;
}

// count total rows of table
function countRows($tableName,$clause)
{
    global $connection;
    $sql = "select COUNT(*) from $tableName $clause";
    $result = $connection->query($sql);
    return $result->fetch_row()[0];
}

// uploads image to specified location and returns name of the image
function imageLocation($submitName,$file)   // $submitName and $file are control names of the form
{
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES[$file]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST[$submitName])) {
        $check = getimagesize($_FILES[$file]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            die("File is not an image!!!");
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES[$file]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        return "falseImage";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES[$file]["name"]). " has been uploaded.";
            return basename($_FILES[$file]["name"]);
        } else {
            echo "uploadfailed";
        }
    }
}

?>