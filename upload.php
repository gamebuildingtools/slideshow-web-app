<?php
// Slideshow Web App Upload Script
session_start();

// Check to see if the post variable is submitted.
if($_POST) {

  // Specify the directory and the target file in the directory
  $target_directory = "images/";
  $target_file = $target_directory . $_POST['slideNumber'] . '.jpg';

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
