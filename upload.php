<?php
// Slideshow Web App Upload Script
session_start();

// Check to see if the post variable is submitted.
if($_POST) {

  // Specify the directory and the target file in the directory
  $target_directory = "images/";
  $target_file = $target_directory . $_POST['slideNumber'] . '.jpg';

  // Grab some information about the image
  list($width, $height, $type, $attr) = getimagesize($_FILES['upload']['tmp_name']);

  // Check if the file is a JPG or JPEG file
  if($type != 2) {
    $_SESSION['uploadMessage'] = '<div class="alert alert-danger">You have uploaded something else besides an image. Only .jpg or .jpeg files are accepted.</div>';
    header("location: slides.php");
  }

  // The slideshow web app only accepts images that are 1920x1080
  if($width != 1920 or $height != 1080) {
    $_SESSION['uploadMessage'] = '<div class="alert alert-danger">Please upload an image that is 1920x1080.</div>';
    header("location: slides.php");
  }

  // Move the uploaded file
  $result = move_uploaded_file($_FILES['upload']['tmp_name'], $target_file);

  // Check to see whether or not the upload was successful
  if($result) {
    $_SESSION['uploadMessage'] = '<div class="alert alert-success">Slide '.$_POST['slideNumber'].' has been uploaded.</div>';
  } else {
    $_SESSION['uploadMessage'] = '<div class="alert alert-danger">Error: Please check the slide. The slide was not uploaded.</div>';
  }

  // Send the user back to slides.php
  header("location: slides.php");
}
?>
