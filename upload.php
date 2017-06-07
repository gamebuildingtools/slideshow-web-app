<?php
$target_directory = "images/";
$target_file = $target_directory . basename($_FILES["fileToUpload"]["name"]);

$isUploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);        
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $isUploadOk = 1;
    } else {
        echo "File is not an image.";
        $isUploadOk = 0;
    }
}

// Check the file size of the image, this is set to 1,500KB
if ($_FILES["fileToUpload"]["size"] > 1500000) {
    echo "Sorry, your file is too large.";
    $isUploadOk = 0;
}

// Only allow jpg files
if($imageFileType != "jpg" ) {
    echo "Sorry, only JPG files are allowed.";
    $isUploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($isUploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
