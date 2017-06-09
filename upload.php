<?php
// Slideshow Web App Upload Script

// Start off with a blank upload message.
$uploadMessage = "";

// Check to see if the post variable is submitted.
if($_POST) {

  $target_directory = "images/";
  $target_file = $target_directory . $_POST['slideNumber'] . '.jpg';

  $result = move_uploaded_file($_FILES['upload']['tmp_name'], $target_file);

  if($result) {
    $uploadMessage = "The new slide has been uploaded.";
  } else {
    $uploadMessage = "Error: Please check the slide. The slide was not uploaded.";
  }

  echo $uploadMessage;
}

?>
