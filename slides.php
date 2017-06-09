<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Slideshow Web App - Slides</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- My Styles -->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <nav class="navbar dark-background">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-brand">Slideshow Web App</span>
            <ul class="nav navbar-nav">
              <li>
                <a href="#">Logout</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Slideshow Web App Overview</h1>
          <p>This web app will provide a number of images via an api that can be used anywhere. You can swap out images by using the interface below. You can also set the amount of time each slide will appear.</p>
        </div>
      </div>
      <div class="row">

          <div class="col-md-7 light-grey-right-border">
            <h2>Slideshow Images</h2>

            <?php for ($i=0; $i < 13; $i++) { ?>
            <form action="upload.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4">
                  <img src="images/<?=$i?>.jpg" class="img-thumbnail" />
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="imageUpload">Image <?=$i+1?></label>
                    <input type="file" name="upload" id="imageUpload" accept="image/jpeg">
                    <input type="hidden" name="slideNumber" value="<?=$i?>">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Upload Image" name="submit" class="btn btn-default btn-xs">
                  </div>
                </div>
              </div>
            </form>
              <hr>
            <?php } ?>

          </div>

        <form>
          <div class="col-md-5">
            <h2>Slideshow Settings</h2>
            <div class="form-group">
              <label for="slideshowTime">Slideshow Time</label>
              <input type="text" class="form-control" id="slideshowTime" />
            </div>
            <div class="form-group">
              <label for="slideshowNumber">Number of Slides</label>
              <input type="text" class="form-control" id="slideshowNumber" />
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary btn-lg btn-block">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
