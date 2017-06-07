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
        <div class="col-md-8 light-grey-right-border">
          <h2>Slideshow Images</h2>
        </div>
        <div class="col-md-4">
          <h2>Slideshow Settings</h2>
        </div>
      </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
