<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Codify Interactive</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Matt Brody & Chris Brody @ Codify Academy">

  <!-- Google Font: Open Sans -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="css/mvpready-admin.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>


  <div id="wrapper">

    <header class="navbar navbar-inverse" role="banner">

      <div class="container-fluid">

        <nav class="collapse navbar-collapse" role="navigation">

          <p id="beginLogo"><a href="index.php">Codify Academy</a></p>

        </nav>

      </div> <!-- /.container -->

    </header>

    <div class="mainsection">

      <div id="beginContainer" class="container-fluid text-center">

        <h1>Welcome to Codify Academy's Interactive Tool</h1>

        <h3>You will learn a lot about HTML and CSS which isn't covered in other interactive tutorials!</h3>
        <br>
        <button id="beginTutorial" onclick="window.location.assign('app/view/meta1/meta1.php')">Begin Now</button>
        <div class="container">
          <div class="col-md-6 col-md-offset-3">
            <hr>
            <h3 onclick="showCourses()">Check Out Individual Courses</h3>
            <hr>
            <div id="courses" class="col-md-6 col-md-offset-3">
              <ol class="text-left">
                <li>
                  <a href="app/view/meta1/meta1.php">Meta Tags</a>
                </li>
                <li>
                  <a href="app/view/attr1/attr1.php">HTML Attributes</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      

    </div><!--end of main section-->

  </div> <!-- /#wrapper -->

  <?php include('footer.php') ?>