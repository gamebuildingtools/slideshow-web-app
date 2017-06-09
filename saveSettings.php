<?php
// Slideshow Web App Upload Script
session_start();

// Check to see if the post variable is submitted.
if($_POST) {

echo $_POST['slideshowTime'];
if(is_numeric($_POST['slideshowTime'])) {
  echo 'true';
}

  $myfile = fopen("slideshowSettings.json", "w");
  $txt = '{
  "slideshowTime": 15,
  "numberOfSlides": 13,
}';
  fwrite($myfile, $txt);

  if(fwrite($myfile, $txt === FALSE)) {
    $_SESSION['saveSettingsMessage'] = '<div class="alert alert-danger">Error: Slideshow settings were not saved.</div>';
  } else {
    $_SESSION['saveSettingsMessage'] = '<div class="alert alert-success">Slideshow Settings have been saved.</div>';
  }
  fclose($myfile);

  // Send the user back to slides.php
  header("location: slides.php");
}
?>
